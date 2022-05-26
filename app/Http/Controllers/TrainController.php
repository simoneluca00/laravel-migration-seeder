<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){

        $trains = Train::where( 'orario_di_partenza', '>=', date("Y-m-d") )->get();

        return view('welcome',compact('trains'));
    }
}
