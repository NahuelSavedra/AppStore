<?php

namespace Database\Factories;

use App\Models\App;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class AppFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = App::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'version'=>$this->faker->numerify('##.#.#'),
            'name'=>$this->faker->title,
            'user_id'=> User::factory(),
            'category'=>$this->faker->randomElement(["juegos","aplicaciones"]),
            'price'=>$this->faker->randomFloat($decimals = 2, $min = 0.00 , $max = 1000.00),
            'url_image'=>$this->faker->url,
            'description'=>$this->faker->paragraph()
        ];
    }
}
