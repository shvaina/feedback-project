<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view ('feedback.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'Full Name'=>'required',
                'Email'=>'required',
                'Feedback'=>'required',
            ]);
        Feedback::create($request->all());
        return redirect('/feedback');
    }
}
