<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function about(){
        $members = TeamMember::all();
        return view('common.about', ['members' => $members]);
    }

    public function gallery(){
        $galleries = Gallery::all();
        return view('common.gallery', ['galleries' => $galleries]);
    }
}
