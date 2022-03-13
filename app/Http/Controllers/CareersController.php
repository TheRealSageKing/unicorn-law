<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index()
    {
        $careers = [];
        return view('pages.careers.index', compact('careers'));
    }

    public function single($slug)
    {
        return view('pages.careers.single');
    }
}
