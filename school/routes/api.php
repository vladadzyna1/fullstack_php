<?php

use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clients', function () {
    return  Client::all();
});


Route::get('/orders', function () {
    return  Order::all();
});

Route::delete('/orders/{id}', function ($id) {
    Order::destroy($id);
    return $id;
});

Route::post('/orders', function () {
    $json = file_get_contents('php://input');

    $data = json_decode($json, true);

    $client_id = $data['client_id'];
    $order_date = $data['order_date'];
    $payment_date = $data['payment_date'];
    $payment_amount = $data['payment_amount'];

    $formData = [
        'client_id' => $client_id,
        'order_date' => $order_date,
        'payment_date' => $payment_date,
        'payment_amount' => $payment_amount,
    ];
//    return $formData;

    Order::create($formData);

    return $client_id . " " . $payment_amount;
});

