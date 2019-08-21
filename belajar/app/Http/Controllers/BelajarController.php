<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Belajar;

class BelajarController extends Controller
{
    public function index(){
    	$belajars = belajar::all();
    	return view('index', compact('$belajar'));
    }
}
