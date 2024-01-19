<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.login');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/usage', function () {
    $boxArray = [
        ['id' => 1, 'icon' => 'bx-envelope', 'name' => 'Sent notifications'],
        ['id' => 2, 'icon' => 'bx-send', 'name' => 'API Calls'],
        ['id' => 3, 'icon' => 'bx-cloud-upload', 'name' => 'Deployments'],
        ['id' => 4, 'icon' => 'bxs-flask', 'name' => 'RPC Call usage'],
        ['id' => 5, 'icon' => 'bx-landscape', 'name' => 'NFT Express'],
        ['id' => 6, 'icon' => 'bxs-truck', 'name' => 'Gas Pump'],
        ['id' => 7, 'icon' => 'bxs-briefcase', 'name' => 'Custodial Wallet'],
        ['id' => 8, 'icon' => 'bx-dollar-circle', 'name' => 'Other Fee Covering'],
    ];

    return view('pages.usage')->with('boxArray', $boxArray);
});
Route::get('/clients', function () {
    $tableArray = [
        ['id' => 1, 'fullname' => 'Eduthon 1', 'email' => 'ade@gmail.com','school_name'=>'Ade schools','secret_key'=>'gdhdfhvcjxgvxvjhvuhdfudu','purchase_code'=>'efgdfgfgsdfhhfdgvhjxhgjhv', 'url'=>'http://localhost:8000/clients'],
    ];
    return view('pages.clients')->with('tableArray', $tableArray);
});
Route::get('/notifications', function () {
    return view('pages.notifications');
});
Route::get('/notifications/subscriptions', function () {
    return view('pages.subscriptions');
});
Route::get('/notifications/notifications', function () {
    return view('pages.notifications2');
});