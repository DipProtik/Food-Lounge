<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = new App\Gallery();
        $gallery->name = "1.jpg";
        $gallery->caption = " 1";
        $gallery->save();

        $gallery = new App\Gallery();
        $gallery->name = "2.jpg";
        $gallery->caption = "2";
        $gallery->save();

        $gallery = new App\Gallery();
        $gallery->name = "3.jpg";
        $gallery->caption = "3";
        $gallery->save();

        $gallery = new App\Gallery();
        $gallery->name = "4.jpg";
        $gallery->caption = "4";
        $gallery->save();

        $gallery = new App\Gallery();
        $gallery->name = "5.jpg";
        $gallery->caption = "5";
        $gallery->save();

        $gallery = new App\Gallery();
        $gallery->name = "6.jpg";
        $gallery->caption = "6";
        $gallery->save();

        $gallery = new App\Gallery();
        $gallery->name = "7.jpg";
        $gallery->caption = " 7";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "8.jpg";
        $gallery->caption = " 8";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "9.jpg";
        $gallery->caption = " 9";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "10.jpg";
        $gallery->caption = " 10";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "11.jpg";
        $gallery->caption = "11";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "12.jpg";
        $gallery->caption = "12";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "13.jpg";
        $gallery->caption = "13";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "14.jpg";
        $gallery->caption = "14";
        $gallery->save();


        $gallery = new App\Gallery();
        $gallery->name = "15.jpg";
        $gallery->caption = "15";
        $gallery->save();

    }
}
