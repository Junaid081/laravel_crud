<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
#use Illuminate\Suppose\Facades\DB;
use App\Models\Userdetails;
class AddData extends Controller
{
    function add(Request $req){ 
       $user = new Userdetails;
       $user->name = $req->username;
       $user->message = $req->message;
       $user->save();
       $data = Userdetails::all();
       return view('index',['lists' => $data]);
    }
    function listofdata(){
        $data = Userdetails::all();
        return view('index',['lists' => $data]);
    }
    function delete($id){
        $dat = Userdetails::find($id);
        $dat->delete();       
        return redirect('index');
    }
    function show($id){
        $dat = Userdetails::find($id);  
        return view('show',['dat'=>$dat]);
    }
    function update(Request $req){ 
       # echo "checking";
        $user = Userdetails::find($req->id);
        $user->name = $req->name;
        $user->message = $req->message;
        $user->save();
        return redirect('index');
     }
    function search($name){
     return Userdetails::where('name','like','%'.$name.'%')->get();
            
    }
}
