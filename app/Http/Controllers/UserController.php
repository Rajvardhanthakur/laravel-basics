<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

class UserController extends Controller
{
    public function index(){

        // $user = new User();
        // $user->name = 'John';
        // $user->email = 'joh232@gmail.com';
        // $user->password = bcrypt('password');
        // $user->save();

        // var_dump($user);
        // dd($user); // die and dump

        // $user = User::all();// to get all the records in User table
        // return $user;

        //User::where('id', 2)->delete();

        // DB::insert('insert into users (name, email, password) values (?,?,?)', [
        //     'John','john123@gmail.com','john123',
        // ]);

        // DB::update('update users set name = ? where id=1', ['Tyrion']);

        // DB::delete('delete from users where id=1');

        User::where('id', 3)->update(['name' => 'Tyrion']);

        $user = User::all();

        // $users = DB::select('select * from users');

        return $user;

        return view('home');
    }
}
