<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests\TodoCreateRequest;

use App\Todo;

class TodoController extends Controller
{
    //
    public function index(){
        return view('todos.index');
    }

    public function create(){
        return view('todos.create');
    }

    public function edit(){
        return view('todos.edit');
    }

    public function store(TodoCreateRequest $request){


        // $rules = [
        //     'title' => 'required|max:255',
        // ];

        // $message = [
        //     'title.max' => 'Todo title should not be greater than 255 max'
        // ];

        // $validator = Validator::make($request->all(), $rules, $message);
        

        // if($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        //error of this type of validation goes into the sessions as name of 'errors'
        // $request->validate([
        //     'title' => 'required|max:255',
        // ]);
        
        Todo::create($request->all());

        return redirect()->back()->with('message', 'Todo Created Successfully');
    }
}
