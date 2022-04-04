<?php

use Alpaca\Alpaca;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $alpaca = new Alpaca("key","secret"); // api key, secret
    $account = $alpaca->getAccount();
   
    echo '<pre>';
    print_r ($account);;
});

// create order
Route::get('create_order', function () {
    $alpaca = new Alpaca("key","secret"); // api key, secret
    $sid = 'buy'; // mean buy,sell 
    $status = $alpaca->createOrder('GOOGL', 1, $sid, 'market', 'day', $limit_price = null, $stop_price = null, $client_order_id = null, $extended_hours = null, $order_class = null, $additional = []);
 dd($status);
});
