<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller {

    public function register(Request $request) {

        return view('pages.register', ['title' => 'Регистрация']);
    }

    public function registerPost(Request $request) {

// dump($request->all());
        $this->validate($request, ['*' => 'required',
            'name' => 'min:3',
            'email' => 'email|unique:users',
            'password' => 'min:6|confirmed',
            'license' => 'accepted']);

        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'created_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
        ]);

        return redirect()->route('Main')->with('register', true);
    }

    public function all() {
        return "all";
    }

    public function db() {

        $data = Db::table('users')->where('name', 'like', '%kita')->get(['name']);
        foreach ($data as $dat) {
            dump($dat->name);
        }
    }

    public function login() {
        return view('pages.login', ['title' => 'Авторизация']);
    }

    public function loginPost(Request $request) {
        $remember = $request->input('remember') ? true : false;
        $authResult = Auth::attempt([
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                        ], $remember);
        if ($authResult) {
            return redirect()
                            ->route('Main');
        } else {
            return redirect()
                            ->route('admin.login')
                            ->with('authError', 'Неправильный логин или пароль!');
        }
    }

}
