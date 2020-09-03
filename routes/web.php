<?php

use BaconQrCode\Encoder\QrCode;
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
    return view('welcome');
});

Route::get('qr', function (){
    \QrCode::size(200)
        ->format('png')
        ->generate('google.com',public_path('images/qrcode.png'));

    return view('qrCode');
    //return Qrcode::size(300)->generate('A basic example of QR code! Nicesnippets.com');
	/*SimpleSoftwareIO\QrCode::size(500)
	->format('png')
	->generate('ItSolutionSutff.com', public_path('images/qrcode.png'));
	return view('qrCode');*/
});

Route::get('generate','GenerateQrController@QrGenerate');
