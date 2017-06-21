<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_items = DB::select("select * from items where is_new = '1' order by rand() limit 6");

        $vida_items = DB::select("select * from items where category_id in (1, 2) order by rand() limit 3");
        $daylung_items = DB::select("select * from items where category_id = 3 order by rand() limit 3");
        $tuida_items = DB::select("select * from items where category_id = 4 order by rand() limit 3");

        return view('home', compact('new_items', 'vida_items', 'daylung_items', 'tuida_items'));
    }
}
