<?php

use Illuminate\Database\Seeder;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Popular Dishes


        $dish = new App\Dish();
        $dish->name = "Paneer Butter Masala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "260";
        $dish->photo = "1.jpg";
        $dish->dish_category_id = "1";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Korai Special";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "250";
        $dish->photo = "2.jpg";
        $dish->dish_category_id = "1";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Chicken Vorta";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "350";
        $dish->photo = "3.jpg";
        $dish->dish_category_id = "1";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Chicken Tikka Masala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "310";
        $dish->photo = "4.jpg";
        $dish->dish_category_id = "1";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Mattar Paneer";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "275";
        $dish->photo = "5.jpg";
        $dish->dish_category_id = "1";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Beef Boti Kebab Special";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "280";
        $dish->photo = "6.jpg";
        $dish->dish_category_id = "1";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Beef Achari";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "240";
        $dish->photo = "7.jpg";
        $dish->dish_category_id = "1";
        $dish->save();














		// Appetizer

        $dish = new App\Dish();
        $dish->name = "Plain Raita";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "120";
        $dish->photo = "8.jpg";
        $dish->dish_category_id = "2";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Aloo Raita";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "140";
        $dish->photo = "9.jpg";
        $dish->dish_category_id = "2";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Everyday's Bite Special Raita";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "290";
        $dish->photo = "10.jpg";
        $dish->dish_category_id = "2";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Mixed Salad";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "75";
        $dish->photo = "11.jpg";
        $dish->dish_category_id = "2";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Plain Curd";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "70";
        $dish->photo = "12.jpg";
        $dish->dish_category_id = "2";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Multani Soup";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "160";
        $dish->photo = "13.jpg";
        $dish->dish_category_id = "2";
        $dish->save();











        //Chicken


        $dish = new App\Dish();
        $dish->name = "Woondall Special Chicken Curry";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "260";
        $dish->photo = "14.jpg";
        $dish->dish_category_id = "3";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Chicken Bhuna";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "220";
        $dish->photo = "1.jpg";
        $dish->dish_category_id = "3";
        $dish->save();



        $dish = new App\Dish();
        $dish->name = "Chicken Masala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "230";
        $dish->photo = "2.jpg";
        $dish->dish_category_id = "3";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Chicken Dahiwala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "250";
        $dish->photo = "3.jpg";
        $dish->dish_category_id = "3";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Shakwala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "240";
        $dish->photo = "4.jpg";
        $dish->dish_category_id = "3";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Korai";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "250";
        $dish->photo = "5.jpg";
        $dish->dish_category_id = "3";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Reshmi Butter Masala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "320";
        $dish->photo = "6.jpg";
        $dish->dish_category_id = "3";
        $dish->save();










        //Beef


        $dish = new App\Dish();
        $dish->name = "Keema Mattar";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "220";
        $dish->photo = "7.jpg";
        $dish->dish_category_id = "4";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Beef Satkora";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "295";
        $dish->photo = "8.jpg";
        $dish->dish_category_id = "4";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Beef Dopiaza";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "250";
        $dish->photo = "9.jpg";
        $dish->dish_category_id = "4";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Beef Achari Special";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "240";
        $dish->photo = "10.jpg";
        $dish->dish_category_id = "4";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Beef Bhuna";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "240";
        $dish->photo = "11.jpg";
        $dish->dish_category_id = "4";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Beef Muglai";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "255";
        $dish->photo = "12.jpg";
        $dish->dish_category_id = "4";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Beef Panjabi";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "320";
        $dish->photo = "12.jpg";
        $dish->dish_category_id = "4";
        $dish->save();











        //Mutton

        $dish = new App\Dish();
        $dish->name = "Mutton Curry";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "260";
        $dish->photo = "13.jpg";
        $dish->dish_category_id = "5";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Mutton Rogon Josh";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "295";
        $dish->photo = "14.jpg";
        $dish->dish_category_id = "5";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Mutton Satkora";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "320";
        $dish->photo = "1.jpg";
        $dish->dish_category_id = "5";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Mutton Masala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "290";
        $dish->photo = "2.jpg";
        $dish->dish_category_id = "5";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Mutton Korma";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "280";
        $dish->photo = "3.jpg";
        $dish->dish_category_id = "5";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Mutton Dahiwala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "295";
        $dish->photo = "4.jpg";
        $dish->dish_category_id = "5";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Mutton Korai";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "350";
        $dish->photo = "5.jpg";
        $dish->dish_category_id = "5";
        $dish->save();










        //Fish & Prawn

        $dish = new App\Dish();
        $dish->name = "Fish n Chips";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "350";
        $dish->photo = "6.jpg";
        $dish->dish_category_id = "6";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Sweet & Sour Fish";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "295";
        $dish->photo = "7.jpg";
        $dish->dish_category_id = "6";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Sweet & Sour Prawn";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "320";
        $dish->photo = "8.jpg";
        $dish->dish_category_id = "6";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Prawn with Garlic Sauce";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "330";
        $dish->photo = "9.jpg";
        $dish->dish_category_id = "6";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Special Prawn Masala";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "380";
        $dish->photo = "10.jpg";
        $dish->dish_category_id = "6";
        $dish->save();

       







        // Kebab


       $dish = new App\Dish();
        $dish->name = "Tandoori Chicken";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "190";
        $dish->photo = "11.jpg";
        $dish->dish_category_id = "7";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Tikka Kebab";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "415";
        $dish->photo = "12.jpg";
        $dish->dish_category_id = "7";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Reshmi Kebab";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "430";
        $dish->photo = "13.jpg";
        $dish->dish_category_id = "7";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Chicken Hariyali Kebab";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "490";
        $dish->photo = "14.jpg";
        $dish->dish_category_id = "7";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Boti Kebab";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "450";
        $dish->photo = "1.jpg";
        $dish->dish_category_id = "7";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Beef Boti Kebab";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "280";
        $dish->photo = "2.jpg";
        $dish->dish_category_id = "7";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Mutton Keema Kebab";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "240";
        $dish->photo = "3.jpg";
        $dish->dish_category_id = "7";
        $dish->save();








       // Naan


        $dish = new App\Dish();
        $dish->name = "Woondall Special Family Naan";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "425";
        $dish->photo = "4.jpg";
        $dish->dish_category_id = "8";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Plain Naan";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "50";
        $dish->photo = "5.jpg";
        $dish->dish_category_id = "8";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Butter Naan";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "65";
        $dish->photo = "6.jpg";
        $dish->dish_category_id = "8";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Garlic Naan";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "90";
        $dish->photo = "7.jpg";
        $dish->dish_category_id = "8";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Keema Naan";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "175";
        $dish->photo = "8.jpg";
        $dish->dish_category_id = "8";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Masala Naan";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "140";
        $dish->photo = "9.jpg";
        $dish->dish_category_id = "8";
        $dish->save();










        // Soups & Salad


        $dish = new App\Dish();
        $dish->name = "Thai Soup";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "250";
        $dish->photo = "10.jpg";
        $dish->dish_category_id = "9";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Hot & Sour Soup";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "250";
        $dish->photo = "11.jpg";
        $dish->dish_category_id = "9";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Fried Wonton";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "200";
        $dish->photo = "12.jpg";
        $dish->dish_category_id = "9";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Lab Gai Salad";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "350";
        $dish->photo = "13.jpg";
        $dish->dish_category_id = "9";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Cashewnut Salad";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "350";
        $dish->photo = "14.jpg";
        $dish->dish_category_id = "9";
        $dish->save();






        // ARABIAN SHAWARMA

        $dish = new App\Dish();
        $dish->name = "Beef Shawarma";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "165";
        $dish->photo = "1.jpg";
        $dish->dish_category_id = "10";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Chicken Shawarma";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "165";
        $dish->photo = "2.jpg";
        $dish->dish_category_id = "10";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Tandoori Chicken Shawarma";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "200";
        $dish->photo = "3.jpg";
        $dish->dish_category_id = "10";
        $dish->save();


        $dish = new App\Dish();
        $dish->name = "Tuna Fish Shawarma";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "170";
        $dish->photo = "4.jpg";
        $dish->dish_category_id = "10";
        $dish->save();

        $dish = new App\Dish();
        $dish->name = "Tandoori Fish Shwarma Wrap";
        $dish->details = "The near perfect combination of spiciness and creaminess.";
        $dish->price = "240";
        $dish->photo = "5.jpg";
        $dish->dish_category_id = "10";
        $dish->save();


       
    }
}
