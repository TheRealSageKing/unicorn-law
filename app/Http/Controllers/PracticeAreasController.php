<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeAreasController extends Controller
{
    public function index()
    {
        $practiceAreas = [];
        return view('pages.practice_areas.index', compact('practiceAreas'));
    }

    public function single($area)
    {
        $area = [];
        return view('pages.practice_areas.single', compact('area'));
    }
}
