<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show () {
        return view('welcome');
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

