<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $redis = Redis::connection();

        $redis->set('name', 'Taylor');
        $name = $redis->get('name');
        dd($name);

        $values = $redis->lrange('names', 5, 10);

    }
}
