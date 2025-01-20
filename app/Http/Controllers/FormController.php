<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class FormController extends Controller
{
    function store_data(Request $request)
    {
        $data = new Student;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->number = $request->input('number');
        $data->subject = $request->input('subject');

        $data->save();

        return back();
    }

    function records()
    {
        $records = Student::all();

        return view('records',compact('records'));

    }

}
