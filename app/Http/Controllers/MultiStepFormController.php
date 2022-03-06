<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class MultiStepFormController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $orderData = $request->all();

        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->city = $request->city;
        $order->state = $request->state;
        $order->postal_code = $request->postal_code;
        $order->address = $request->address;
        $order->note = $request->note;

        $order->transaction_id = $request->transaction_id;
        $order->total_amount = $request->total_amount;

        $order->save();

        return response()->json(['success' => 'success'], 200);
    }
}
