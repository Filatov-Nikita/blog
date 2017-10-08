<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

    public function index() {
        return 1;
    }

    public function one($id = null) {
        return $id;
    }

}
