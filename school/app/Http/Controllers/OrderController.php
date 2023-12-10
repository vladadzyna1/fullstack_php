<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $clients = Client::all();
        return view('orders.index', compact(['orders','clients']));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store()
    {
        $data = request()->validate([
            'client_id' => 'required|numeric|exists:clients,id',
            'order_date' => 'required|date',
            'total_order_quantity' => 'required|numeric',
            'total_order_cost' =>'required|numeric',
            'payment_date' => 'required|date',
            'payment_amount' => 'required|numeric',
        ]);

        Order::create($data);

        return redirect()->route('orders.index');
    }

    public function update(Order $order)
    {

        $data = request()->validate([
            'client_id' => 'numeric',
            'order_date' => 'date',
            'payment_date' => 'date',
            'payment_amount' => 'numeric',
        ]);

        $order->update($data);

        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index');
    }
}
