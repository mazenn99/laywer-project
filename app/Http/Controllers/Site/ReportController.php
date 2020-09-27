<?php

namespace App\Http\Controllers\Site;

use Response;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
   
    // download file
    public function downloadFile($id)
    {
        $report = $this->find($id);
        $file= public_path(). "/reports/". $report->file;
        $headers = array(
                'Content-Type: application/pdf',
                );
        return Response::download($file, 'report.pdf', $headers);
    }

    // find
    public function find($id)
    {
        return Report::find($id);
    }


    public function index()
    {
        $reports = Report::select('id', 'text', 'created_at')->get()->map(function($report){
            $report->date = date("d-m-Y", strtotime($report->created_at)); 
            return $report;
        });
        return response()->json(['responseCode' => 100, 'responseMessage' => 'success' , 'data' => $reports]);
    }
}
