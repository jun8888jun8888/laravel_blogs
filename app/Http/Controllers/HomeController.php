<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Redis::hincrby('k1','login',1);
        return view('home');
    }

    public function showUserInfo($method, $parameters)
    {
        $user = DB::connection()->select('select * from player');
        return view('user.index', ['users' => $user]);
    }
}
