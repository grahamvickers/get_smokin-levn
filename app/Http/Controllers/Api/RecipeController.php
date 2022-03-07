<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    /**
     * Return all instances of the recipe model
     *
     * @return Illuminate\Http\JsonResponse
     *
     */

    public function index(Request $request){

        if ($request->q) {
            $recipes = Recipe::where('name', 'LIKE', "%{$request->q}%")
                ->orWhere('bio', 'LIKE', "%{$request->q}%")
                ->get()
                ->map->only([
                'name',
                'bio',
                'cost',
                'time',
                'img'
            ]);
        } else {
            $recipes = Recipe::all()->map->only([
                'name',
                'bio',
                'cost',
                'time',
                'img'
            ]);
        }
   
        return response()->json($recipes, 200);
    }
}
