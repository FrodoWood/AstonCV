<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
        if (Cv::where('user_id', (Auth::id()))->exists()) {
            return redirect()->route('cvs');
        } else {

            return view('cvs.create');
        }
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
        if (Auth::id() === $cv->user_id) {
            return view('cvs.edit', ['cv' => $cv]);
        }
        return redirect()->route('showCV', ['cv' => $cv]);
    }

    public function update(CV $cv)
    {
        request()->validate([
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('cvs')->ignore($cv),
            ]
        ]);

        $cv->update([
            'name' => request('name'),
            'email' => request('email'),
            'keyprogramming' => request('keyprogramming'),
            'profile' => request('profile'),
            'education' => request('education'),
            'URLlinks' => request('URLlinks'),
        ]);
        return redirect('/cvs');
    }
}
