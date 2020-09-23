<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    // get all Order
    public function index()
    {
        if (request()->typeId) {
            $orders = Order::where('type_id', request()->typeId )->orderBy('created_at', 'desc')->with('type')->paginate(50);
        }else{
            $orders = Order::with('type')->orderBy('created_at', 'desc')->paginate(50);
        }
        return response()->json(['resourceCode' => 100, 'responseMessage' => 'success', 'data' => $orders]);
    }


    // find
    public function find($id)
    {
        return Order::find($id);
    }

    // change status
    public function changeStatus($id)
    {
        $order = $this->find($id);
        $order->active = ($order->active == 1) ? 0 : 1 ;
        $order->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $order->active]);
    }
}
