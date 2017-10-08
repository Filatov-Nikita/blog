<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    public function index() {
        return 3;
    }

    public function add() {
        return 5;
    }

    public function edit($id) {
        return $id;
    }

    public function delete($id) {
        return $id;
    }

}
