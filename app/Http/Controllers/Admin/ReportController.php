<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    // return all active news
    public function index()
    {
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $this->get() ]);
    }

    //store
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string',
            'file' => 'required'
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        
        $data = $request->all();
        $data['active'] = 1;
        if ($request->hasFile('file')) {
            $file = $request->file;
            $file_name =md5(pathinfo($file, PATHINFO_FILENAME));
            $extension = $file->extension();
            $full_name = $file_name.'.'.$extension;
            $file->move('reports', $full_name);
            $data['file'] = $full_name;
        }

        Report::create($data);
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $this->get() ]);
    }

    // getAll
    public function get()
    {
        return Report::get()->map(function($report){
            $report->file = config('app.url').'report/'. $report->file;
            return $report;
        });
    }


    // find 
    public function find($id)
    {
        return Report::find($id);
    }

    //update  
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string',
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        $report = $this->find($id);
        $report->text = $request->text;
        $report->update();
        $this->index();
    }


    // change status
    public function changeStatus($id)
    {
        $report = $this->find($id);
        $report->active = ($report->active == 1) ? 0 : 1 ;
        $report->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $report->active]);
    }
}
