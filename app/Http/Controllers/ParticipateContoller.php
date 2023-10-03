<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipateContoller extends Controller
{
    public function index()
    {
        return Participate::all();
    }
    public function show($id)
    {
        return Participate::find($id);
    }
    public function destroy($id)
    {
        return Participate::find($id)->delete();
        return redirect('/participates/list');
    }
    public function update(Request $request, $id)
    {
        $participate =  Participate::find($id);
        $participate->present = $request->present;
        $participate->event_id = $request->event_id;
        $participate->user_id = $request->user_id;
        $participate->save();
        return redirect('/participates/list');
    }
    public function store(Request $request)
    {
        $participate = new Participate();
        $participate->present = $request->present;
        $participate->event_id = $request->event_id;
        $participate->user_id = $request->user_id;
        $participate->save();
        return redirect('/participates/list');
    }
    public function newView()
    {
        $users = Participate::all();
        return view('participates.new', ['users' => $users]);
    }
    public function editView($id)
    {
        $users = User::all();
        $task = Participate::find($id);
        return view('participates.edit', ['users' => $users, 'participate' => $task]);
    }
    public function listView()
    {
        $participates = Participate::all();
        return view('participates.list', ['participates' => $participates]);
    }
}
