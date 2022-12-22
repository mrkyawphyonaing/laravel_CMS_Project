<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use App\Models\TeamMember;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show () {
        $team_members = TeamMember::orderBy('name')->get();
        $categories = Category::all();
        return view('welcome')->with([
            'members'=>$team_members,'categories'=>$categories,
        ]);
    }
    public function testing() {
        //$authors = DB::table('authors')->get();
        //$authors = DB::select('select * from authors');
        //return $authors;
        $publishers = Publisher::all();
        $publishers = Publisher::where('id', '>=',5)->where('name','=','Carroll Feil')->get();

        //return $publishers; output from database test publisher
        return view('testing')->with([
            'publishers'=>$publishers,
        ]);
    }

}

