<?php

namespace App\Http\Controllers;

use App\Model\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();

        dump($trains);
        return view('welcome',compact('trains'));
    }
}
