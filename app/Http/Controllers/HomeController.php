<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('about');
    }

    public function kartun() {
        return view('ricky-morty');
    }

    public function presiden() {
        return view('presiden');
    }

    public function hello() {
        $dataArray= [
            'message' => 'Hello World'
        ];
    
        return $dataArray;
        // return response()->json($dataArray);
    }

    public function debug() {
        $dataArray= [
            'message' => 'Hello World'
        ];
        
        ddd($dataArray);
    }
}
