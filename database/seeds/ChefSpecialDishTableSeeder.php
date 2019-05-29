<?php

use Illuminate\Database\Seeder;

class ChefSpecialDishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chef_special = new App\ChefSpecial();
        $chef_special->dish_id = "15";
        $chef_special->save();

        $chef_special = new App\ChefSpecial();
        $chef_special->dish_id = "16";
        $chef_special->save();

        $chef_special = new App\ChefSpecial();
        $chef_special->dish_id = "17";
        $chef_special->save();

        $chef_special = new App\ChefSpecial();
        $chef_special->dish_id = "18";
        $chef_special->save();

        $chef_special = new App\ChefSpecial();
        $chef_special->dish_id = "19";
        $chef_special->save();

        $chef_special = new App\ChefSpecial();
        $chef_special->dish_id = "20";
        $chef_special->save();

        $chef_special = new App\ChefSpecial();
        $chef_special->dish_id = "21";
        $chef_special->save();
   }
}
