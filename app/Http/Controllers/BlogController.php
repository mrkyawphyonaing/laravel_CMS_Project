<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogDetails($blog_id,$author_id){
        return 'This is blog_id ' .$blog_id. ' of author '.$author_id;
    }
}
