<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bloggers=User::all();

        $data = [
            'bloggers' => $bloggers,
        ];
       //dd($bloggers);
        return view('home.index', $data);
    }
}
