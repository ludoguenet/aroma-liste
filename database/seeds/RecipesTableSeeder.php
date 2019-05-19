<?php

use App\Recipe;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i=0; $i < 15; $i++) {
            $recipe = Recipe::create([
                'title' => $faker->sentence,
                'description' => $faker->sentence(50, true),
                'image' => $faker->sentence(15, true),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'category_id' => rand(1,9)
            ]);

            $randomIngredients = DB::table('Ingredients')->take(rand(3,7))->inRandomOrder()->get();

             foreach ($randomIngredients as $randomIngredient) {
                 $recipe->ingredients()->attach($randomIngredient->id);
            }

            $recipe->save();
        }
     }
}
