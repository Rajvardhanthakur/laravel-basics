<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use App\User;

class UserController extends Controller
{  

    public function uploadAvatar(Request $request){

        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            ///$request->session()->flash('message', 'Image Uploaded');
            return redirect()->back()->with('message', 'Image Uploaded');
        }
        
        //$request->session()->flash('error', 'Image is not uploaded');

        return redirect()->back()->with('error', 'Image is not uploaded');

    }


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

        // User::where('id', 3)->update(['name' => 'Tyrion']);

        

        // // $users = DB::select('select * from users');


        $data = [
            'name' => 'Sansha',
            'email' => 'sansha@gmil.com',
            'password' => 'sansha123'
        ];

        // User::create($data);

        $user = User::all();
        return $user;

        return view('home');
    }
}
