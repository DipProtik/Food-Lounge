<?php

use Illuminate\Database\Seeder;

class LovedDishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lovedDish = new App\LovedDish();
        $lovedDish->dish_id = "1";
        $lovedDish->save();

        $lovedDish = new App\LovedDish();
        $lovedDish->dish_id = "2";
        $lovedDish->save();

        $lovedDish = new App\LovedDish();
        $lovedDish->dish_id = "3";
        $lovedDish->save();

        $lovedDish = new App\LovedDish();
        $lovedDish->dish_id = "4";
        $lovedDish->save();

        $lovedDish = new App\LovedDish();
        $lovedDish->dish_id = "5";
        $lovedDish->save();

        $lovedDish = new App\LovedDish();
        $lovedDish->dish_id = "6";
        $lovedDish->save();

        $lovedDish = new App\LovedDish();
        $lovedDish->dish_id = "7";
        $lovedDish->save();
    }
}
