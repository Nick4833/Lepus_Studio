<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($value='')
    {
    	return view('home');
    }

    public function contact($value='')
    {
    	return view('contact');
    }

    public function games($value='')
    {
    	return view('games');
    }

    public function gameDetail($value='')
    {
    	return view('game_detail');
    }

    public function news($value='')
    {
    	return view('news');
    }

    public function newsDetail($value='')
    {
    	return view('news_detail');
    }

    public function jobs($value='')
    {
    	return view('jobs');
    }
}
