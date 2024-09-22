<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function index(){
        $penjual = Penjual::get();
        return view("penjual/index", ['penjual'=> $penjual]);
    }
}
