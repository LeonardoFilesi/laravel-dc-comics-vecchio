<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DCComic;

class PageController extends Controller
{
    public function index()
        {
          /*   $dccomics = DCCOMIC::all();
            return view('welcome', compact('dccomics')); */
            return view('home');
        }
}
