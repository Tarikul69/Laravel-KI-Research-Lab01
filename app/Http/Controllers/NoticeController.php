<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\post;
use App\Models\project;
use App\Models\notice;
use App\Models\team;


class NoticeController extends Controller
{
    //
    public function notice()
    {
        $data = DB::table('notice')->orderBy('id', 'desc')->get();
        //return view('admin.news')-> with('data', $data);
        return view('notice', compact('data'));
        //return view('notice');
    }
    //UI news detailse  
    public function details($id)
    { 
        $data = post::find($id);
        return view ('details', compact('data'));
    }
    //Project UI
    public function project()
    {
        $data = DB::table('project1')->orderBy('id', 'desc')->get();
        //$data = DB::table('project2')->get();

        return view('project', compact('data'));
    }
    //Project Detailse
    public function projectdetailse($id)
    {
        $data = project::find($id);
        return view ('projectDetailse', compact('data'));
    }
    //Edit Project
    public function editproject()
    {
        return view('admin.editproject');
    }
    //Contact UI
    public function contact()
    {
        return view('contact');
    }
    //Admin
    public function admin1()
    {
        return view('admin.home');
    }
    //Edit Notice
    public function edit($id){
        $data = post::find($id);
        return view('admin.news', compact('data'));

    }
    public function editnews($id)
    {
        $data = post::find($id);
        return view('admin.editnews', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $req-> validate([
            'name' => 'required | max: 100',
            'notice' => 'required | max: 10000',
       ]); 
        $abc = post::find($id);
        $abc ->name =  $name = $req->input('name');
        $abc ->notice = $notice = $req->input('notice');
       // $abc ->save();

        return view('admin.news', compact('abc'));
    }
    //Delete Notice
    public function delete($id){
 
        $data = post::find($id);
        $data -> delete();    
        return redirect()->back();
    }
    public function delete1($id){
 
        $data = project::find($id);
        $data -> delete();    
        return redirect()->back();
    }
    //Notice
    public function news()
    {
        $data = DB::table('notice')->orderBy('id', 'desc')->get();
        return view('admin.news', compact('data'));     
    }
    public function news1(Request $req)
    {
        $req-> validate([
             'name' => 'required | max: 50',
             'notice' => 'required | max: 10000',
        ]);
         $abc = DB::table('notice')->insert([
            'id'=>$req->input('id'),
            'name'=>$req->input('name'),
            'notice'=>$req->input('notice'),
        ]);
         if($req){
            return back()->with('Success', 'Data inserted successfuly');
        }else{
            return back()->with('Fail', 'Failed to insert data');
        }
        
        /* if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        } */
    
    }
    //Project
    public function project1(Request $req)
    {
        $req-> validate([
            'pname'=> 'required',
            'details'=> 'required',
        ]);
        $ab = DB::table('project1')->insert([
            'name'=>$req->input('pname'),
            'details'=>$req->input('details'),
        ]);

        return redirect()->back();
        
    }
    public function project2(){
        $gf = DB::table('project1')->orderBy('id', 'desc')->get();
        return view('admin.project1', compact('gf'));
    }
    //Adminhome
    public function adminhome()
    {
        return view('admin.adminhome');
    }
    //Admin Team
    public function team(){
        $abcd = DB::table('project2',)->get();
        return view('admin.team', compact('abcd'));
    }
    //Edit Team Details
    public function editteam()
    {
        return view('admin.editteam');
    }

    //Delete Team
    public function deleteTeam($id)
    {
        $data = team::find($id);
        $data -> delete();    
        return redirect()->back();
    }
}
