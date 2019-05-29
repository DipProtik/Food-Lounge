<?php

use Illuminate\Database\Seeder;

class DishCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new App\DishCategory();
        $category->name = "Popular Dishes";
        $category->category_id = "popular";
        $category->save();

        $category = new App\DishCategory();
        $category->name = "Appetizer";
        $category->category_id = "appetizer";
        $category->save();
    

        $category = new App\DishCategory();
        $category->name = "Chicken";
        $category->category_id = "chicken";
        $category->save();

        $category = new App\DishCategory();
        $category->name = "Beef";
        $category->category_id = "beef";
        $category->save();

        $category = new App\DishCategory();
        $category->name = "Mutton";
        $category->category_id = "mutton";
        $category->save();

        $category = new App\DishCategory();
        $category->name = "Fish & Prawn";
        $category->category_id = "fishnprawn";
        $category->save();


        $category = new App\DishCategory();
        $category->name = "Kebab";
        $category->category_id = "kebab";
        $category->save();

        $category = new App\DishCategory();
        $category->name = "Naan";
        $category->category_id = "naan";
        $category->save();

        $category = new App\DishCategory();
        $category->name = "Soups & Salads";
        $category->category_id = "soupsnsalads";
        $category->save();


        $category = new App\DishCategory();
        $category->name = "Arabian Shawarma";
        $category->category_id = "shawarma";
        $category->save();  
    }
}
