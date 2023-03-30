<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();
        return view('homepage', compact('trains'));
    }

    public function getReply($bool_variable) {
        if($bool_variable) return "Si";
        else return "No";
        return view('homepage', compact('trains'));
    }
}