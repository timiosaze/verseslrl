<?php

namespace Database\Factories;

use App\Models\Verse;
use Illuminate\Database\Eloquent\Factories\Factory;

class VerseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Verse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'the_verse' => $this->faker->name(),
            'the_content' => $this->faker->realText($maxNbChars = 150, $indexSize = 1),

        ];
    }

    
}
