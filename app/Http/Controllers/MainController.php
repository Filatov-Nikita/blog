<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function index() {
        return view('pages.main', ['title' => 'Main page']);
    }

    public function get(Request $request) {
        $name = $request->input('name', 'Стандарт');        
        return $name;
    }

}
