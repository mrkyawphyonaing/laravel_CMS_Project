<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'price'=>$this->faker->numberBetween(1000,100000),
            'description'=>$this->faker->text(),
            'author_id'=>$this->faker->numberBetween(1,6),
            'publisher_id'=>$this->faker->numberBetween(1,10),
            'categorie_id'=>$this->faker->numberBetween(1,6),
            'published_year'=>$this->faker->year(),
            'edition'=>$this->faker->numberBetween(1,10),
            'total'=>$this->faker->numberBetween(1,2000),


        ];
    }
}
