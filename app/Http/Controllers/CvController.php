<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;

class CvController extends Controller
{
    public function show($id)
    {
        $cv = Cv::find($id);
        return view('/show', array('cv' => $cv));
    }

    public function list()
    {
        return view('/list', array('cvs' => Cv::all()));
    }
}
