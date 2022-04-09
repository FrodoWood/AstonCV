<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;

class CvController extends Controller
{
    public function index()
    {
        $cvs = (Cv::all());

        return view('cvs.index', ['cvs' => $cvs]);
    }

    public function edit(Cv $cv)
    {
        return view('cvs.edit', ['cv' => $cv]);
    }
}
