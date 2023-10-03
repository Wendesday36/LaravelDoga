<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use Illuminate\Http\Request;

class ParticipateContoller extends Controller
{
    public function index(){
        return Participate:: all();
    }
    public function show($id){
        return Participate:: find($id);
    }
    public function destroy($id){
        return Participate:: find($id)->delete();
       // return redirect('/book/list');
    }
    public function update(Request $request,$id){
        $participate =  Participate:: find($id);
        $participate ->present = $request->present;
        $participate ->event_id = $request->event_id;
        $participate ->user_id = $request->user_id;
        $participate->save();
        //return redirect('/book/list');
    }
    public function store(Request $request){
        $participate = new Participate();
        $participate ->present = $request->present;
        $participate ->event_id = $request->event_id;
        $participate ->user_id = $request->user_id;
        $participate->save();
        //return redirect('/book/list');
    }
  
    public function listView(){
        $participates = Participate::all();
        return view('participate.list',['books'=>$participates]);
    }
    
}