<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show () {
        $fruits = ['apple', 'orange', 'banana'];
        return view('welcome')->with([
            'name' => 'Laravel',
            'fruits' => $fruits,
            'author_id' => 111,
            'blog_id' => 222
        ]);
    }
}

