<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $members = TeamMember::all();
        return view('admin.team.index', ['members'=>$members]);
    }

    public  function create(){
        return view('admin.team.create');
    }

    public function store(Request $request){
        $data = $request->validate([
           'name'=> 'required|string',
           'specialty'=> 'required|string',
           'bio'=> 'string',
        ]);
        if ($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('teamPicks', 'public');
        }
        TeamMember::create($data);

        return redirect('/admin/team')->with('success', 'Team member added');
    }

    public function edit(TeamMember $member){

        return view('admin.team.edit', ['member'=>$member]);
    }

    public function save(Request $request, TeamMember $member){
        $data = $request->validate([
            'name'=> 'required|string',
            'specialty'=> 'required|string',
            'bio'=> 'string',
        ]);
        if ($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('teamPicks', 'public');
        }
        $member->update($data);

        return redirect('/admin/team')->with('success', 'Team member info updated');
    }

    public function destroy(TeamMember $member){
        $member->delete();
        return back()->with('success', 'Team member removed');
    }
}
