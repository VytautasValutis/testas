<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Hotel;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::where('id', '>', '0'); 
        $orders = $orders->paginate(10);
        $users = User::all();  
        $hotels = Hotel::all();  
  
        return view('back.index', [
            'orders' => $orders,
            'users' => $users,
            'hotels' => $hotels,
        
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        $confirm = 1;
        $order->update([
            'confirmed' => $confirm,
        ]);

        return redirect()->back();
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back();

    }
}
