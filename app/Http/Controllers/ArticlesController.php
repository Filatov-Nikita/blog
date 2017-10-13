<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

    public function index() {
        return response('123') 
       ->header('X-Header-One', 'Header Value2')
            ->header('X-Header-Two', 'Header Value1')->cookie('Mycook', 'value1', 360*24);
    }

    public function one($id = null) {
        return response()->download(public_path('txt.txt'));
    }

}
