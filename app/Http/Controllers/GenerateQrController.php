<?php


namespace App\Http\Controllers;

use BaconQrCode\Encoder\QrCode;

class GenerateQrController extends Controller
{
    public function QrGenerate(){
        return \QrCode::size(300)
            ->backgroundColor(251,79,20)
            ->generate('Abbymercados.com');
    }
}
