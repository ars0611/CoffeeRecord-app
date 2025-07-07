<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\CoffeeRecord; //

class HomeController extends Controller
{
    public function index()
    {
        //自分の記事を投稿日降順で取得
        $coffee_records = \Auth::user()->coffee_records()->orderBy('created_at','desc')->get();
        $data = [
            'coffee_records' => $coffee_records,
        ];
        return view('home',$data);
    }
}
