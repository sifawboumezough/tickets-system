<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ticket;

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
    return view('welcome', [
    ]);
});

Route::get('/register', function() {
    return 'This where the user can Register';
});

Route::get('/login', function() {
    return 'This is where the user can login ';
});

// All Tickets
Route::get('/tickets',function(){
    return view ('tickets', [
        'heading' => 'Latest tickets',
        'tickets' => Ticket::all()

    ]);
});

// Single Ticket
Route::get('/tickets/{id}',function($id){
    return view ('ticket', [
        'ticket' => Ticket::find($id)
    ]);
});

Route::get('/admin', function(){
    return 'Admin Home Page';
});
Route::get('/client', function(){
    return 'client Home Page';
});

Route::get('/MangementTickets',function(){
    return 'Awhere admin can manage client tickets';
});


