<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Includes\Classes\InterfaceCounter;

class ArticlesController extends Controller {

    protected $counter;

    public function __construct(InterfaceCounter $counter) {
        $this->counter = $counter;
    }

    public function index() {
        $date = Mydate(time());
        return response($date)
                        ->header('X-Header-One', 'Header Value2')
                        ->header('X-Header-Two', 'Header Value1')->cookie('Mycook', 'value1', 360 * 24);
    }

    public function one($id = null) {
        return response()->download(public_path('txt.txt'));
    }

    public function rout_date() {
        $this->counter->count();
        $this->counter->count();
       // return $this->counter->get_value();
return view('pages.main', ['title' => '404']);
        //return Mydate(time());
    }

    public function inter() {
        $this->counter->count();
        $this->counter->count();
        return $this->counter->get_value();
    }

}
