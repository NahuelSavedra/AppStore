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
            'user_id'=> User::factory(),
            'version'=>$this->faker->numerify('##.#.#'),
            'name'=>$this->faker->sentence(5),
            'category'=>$this->faker->randomElement(["Gaming","Enterprise","Education","Entertainment","Social Media"]),
            'price'=>$this->faker->randomFloat($decimals = 2, $min = 0.00 , $max = 500.00),
            'url_image'=>$this->faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg']),
            'description'=>$this->faker->text($maxNbChars = 400)

        ];
    }
}
