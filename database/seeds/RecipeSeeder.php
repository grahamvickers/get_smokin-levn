<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipeSeeder extends Seeder
{   

    /**
     * 
     * Listing of default recipes
     * 
     * @var array
     */
    protected $recipes = [
      [
        'name' => 'Authentic Jamaican Jerk Chicken',
        'bio' => ' A true classic with Authentic flavours you can taste!',
        'time' => '8 hours',
        'cost' => '$$',
        'img' => 'jerk_chicken.jpg'
      ],
      [
        'name' => 'Kansas City Spatchcock Chicken',
        'bio' => 'A great dinner for a summer night BBQ with friends!',
        'time' => '3.5 hours',
        'cost' => '$$',
        'img' => 'spatchcock.jpg'
      ],
      [
        'name' => 'Lemon Pepper Beer Can Chicken',
        'bio' => 'A weeknight staple that will never let you down!',
        'time' => '2.5 hours',
        'cost' => '$$',
        'img' => 'beercan.jpg'
      ],
      [
        'name' => 'Chicken Lollipops',
        'bio' => 'A fun twist on a classic drumstick, the kids will love this one!',
        'time' => '1.5 hours',
        'cost' => '$$',
        'img' => 'lollipops.jpg'
      ]
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach ($this->recipes as $recipe){
        Recipe::firstOrCreate($recipe);
      }
    }
}
