<?php

use App\Dish;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<5; $i++){
            $newDish = new Dish();
            $newDish -> user_id = 1;
            $newDish -> name = $faker->word();
            $newDish -> ingredients = $faker->sentence();
            $newDish -> image = 'images/' . $faker->image('public/storage/images',400,300, null, false);
            $newDish -> price = $faker->randomFloat(2, 10, 40);
            $newDish -> save();
        }
    }
}
