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

    public function show(Cv $cv)
    {
        return view('cvs.show', ['cv' => $cv]);
    }

    public function create()
    {
        return view('cvs.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required | unique:cvs',
        ]);

        Cv::create([
            'name' => request('name'),
            'email' => request('email'),
            'keyprogramming' => request('keyprogramming'),
        ]);

        return redirect('/cvs');
    }

    public function edit(Cv $cv)
    {
        return view('cvs.edit', ['cv' => $cv]);
    }

    public function update(CV $cv)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $cv->update([
            'name' => request('name'),
            'email' => request('email'),
            'keyprogramming' => request('keyprogramming'),
        ]);
        return redirect('/cvs');
    }
}
