<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $pasta = Pasta::All();

        return view('pages.welcome', compact('pasta'));

    }
}
