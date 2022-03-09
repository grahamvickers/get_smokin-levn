<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Return all instances of the blog model
     *
     * @return Illuminate\Http\JsonResponse
     *
     */

    public function index(Request $request){

        $blogs = Blog::all()->map->only([
            'id',
            'title',
            'author',
            'job',
            'date',
            'postMonth',
            'profilePic',
            'img',
            'post' 
        ]);
   
        return response()->json($blogs, 200);
    }
}
