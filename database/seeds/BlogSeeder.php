<?php

use Illuminate\Database\Seeder;
use App\Blog;


class BlogSeeder extends Seeder
{
    
    /**
     * 
     * Listing of default recipes
     * 
     * @var array
     */
    protected $blogs = [
        [
            "title" => "Why You Should Invest in Live Fire Cooking",
            "author" => "Graham Vickers",
            "job" => "CEO/ Lead Editor",
            "date" => "December, 7, 2021, 12:30PM EST",
            "postMonth" => "december",
            "profilePic" => "headshot_circle.png",
            "img" => "smokin_sausage.jpg",
            "post" => "Cooking with a live fire heat source is a true craft to master and can daunting to new comers, but with my help I will make it a breeze."
        ],
        [
            "title" => "Top 5 Smokers and Barbecues to Have in 2021",
            "author" => "Graham Vickers",
            "job" => "CEO/ Lead Editor",
            "date" => "August, 2, 2021, 12:00PM EST",
            "postMonth" => "august",
            "profilePic" => "headshot_circle.png",
            "img" => "top5.jpg",
            "post" => "The Best Smoker to have this season has to be the Yoder Smokers by a land slide. The precision temperature settings and 1/4 inch cnc cut american steel makes this the ultimate smoker to have around the house"
        ],
        [
            "title" => "What to Buy a Grill Master for Christmas 2021!",
            "author" => "Graham Vickers",
            "job" => "CEO/ Lead Editor",
            "date" => "December, 2, 2021, 2:00PM EST",
            "postMonth" => "december",
            "profilePic" => "headshot_circle.png",
            "img" => "gifts.jpg",
            "post" => "If you're struggling to buy the perfect bbq accessory for a full time grill master or home cook, then you have came to the right place because I'm going to tell you my top 5 must have's this 2021/2022 bbq season."
        ],
        [
            "title" => "Summer Grilling Guide 2021",
            "author" => "Graham Vickers",
            "job" => "CEO/ Lead Editor",
            "date" => "July, 2, 2021, 11:30AM EST",
            "postMonth" => "november",
            "profilePic" => "headshot_circle.png",
            "img" => "grill_guide.jpg",
            "post" => "It's a hot summer, so you need to have even hotter and fresher dishes to serve to your friends and family this year! No more chips and dip! We only serve protein for snacks around my house!"
        ],
        [
            "title" => "What Charcoal is Should You Buy?",
            "author" => "Graham Vickers",
            "job" => "CEO/ Lead Editor",
            "date" => "September, 5, 2021, 4:30PM EST",
            "postMonth" => "september",
            "profilePic" => "headshot_circle.png",
            "img" => "charcoal.jpg",
            "post" => "When you first start to cook with charcoal is can be confusing what products to cook with when there are so many out there."
        ]
    ];
  
  
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
        foreach ($this->blogs as $blog){
          Blog::firstOrCreate($blog);
        }
      }
}
