<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Return all instances of the recipe model
     *
     * @return Illuminate\Http\JsonResponse
     *
     */

    public function index(){
        $recipes = Recipe::all()->map->only([
            'name',
            'bio',
            'cost',
            'time',
            'img'
        ])
   
        return response()->json($recipes, 200);
    }
}
