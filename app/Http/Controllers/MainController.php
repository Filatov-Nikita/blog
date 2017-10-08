<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function index() {
        return view('welcome');
    }

    public function get(Request $request) {
        $name = $request->input('name', 'Стандарт');        
        return $name;
    }

}
