<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeamController extends Controller
{
    //Editor
    public function editor(Request $req)
    {
        if($req->hasFile('upload'))
        {
            $originName = $req->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extention = $req->file('upload')->getClientOriginalExtension();
            $fileName = $fileName. '_'.time().'.'.$extention;

            $request->file('upload')->move(public_path('media'), fileName);
            $url = asset('media/'.$fileName);

            return response()->json(['fileName' =>$fileName, 'uploaded'=> 1, 'url' => $url]);

        }
        //return view('admin.home');
    }
    //Wrong Password
    public function wpass()
    {
        return view('admin.wrongpass');
    }
    //Login
    public function login()
    {
        return view('admin.login');
    }
    public function login1(Request $req)
    {
        $email= $req->input("email");
        $pass= $req->input("pass");
        
        if ($email == "tarikulabir931@gmail.com" & $pass == "12346") {
            return view('admin.home');
        }else {

            return view('admin.wrongpass');
            }
    }
    //Team
    public function team10()
    {
        
        $abc1 = DB::table('project2')->get();
        return view('team', compact('abc1'));
    }
    public function team99()
    {

    }
    //Image insertion
    public function img(Request $req)
    {
        $req->validate([
            'name'=>'required | max: 30',
            'bio'=>'required | max:1000',
            'photo'=>'required',
            'rank'=>'required',
        ]);

        $name = $req-> file('photo');
        $unique_name = hexdec(uniqid());
        $extention = strtolower($name->getClientOriginalExtension());
        $unique_photo = $unique_name.'.'.$extention;
        $location = 'photo/';
        $path = $location.$unique_photo;
        $name->move($location, $unique_photo);

        $abc = DB::table('project2')->insert([
            
                'name'=>$req->input('name'),
                'bio'=>$req->input('bio'),
                'img'=>$path,
                'rank'=> $req->input('rank'),
        ]);
        //dd($req->file());
        return redirect()->back();
    }
    //Show image
    public function img1()
    {
        $abc1 = DB::table('project2')->get();
        return view('team', compact('abc1'));
    }

    //joinwithus 
    public function join()
    {
        return view('join');
    }
    public function join1(Request $req)
    {
        //echo 'Good';
        $req->validate([
            'email'=> 'required | max: 30 | email',
        ]);
        $abc = DB::table('email')->insert([
            'email'=>$req->input('email'),
        ]);

        return redirect()->back();

    }
}
