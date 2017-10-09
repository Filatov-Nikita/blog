<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{
    public function login() {
        return "login";
    }
    public function register() {
        return "register";
    }
     public function all() {
        return "all";
    }
}
