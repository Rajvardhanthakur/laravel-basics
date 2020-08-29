<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        // DB::insert('insert into users (name, email, password) values (?,?,?)', [
        //     'John','john123@gmail.com','john123',
        // ]);

        // DB::update('update users set name = ? where id=1', ['Tyrion']);

        DB::delete('delete from users where id=1');

        $users = DB::select('select * from users');

        return $users;

        return view('home');
    }
}
