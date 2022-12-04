<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;
    public function definition()
    {
        return [
            'name' => Str::random(10),
            'email' => $this->faker->email,
            'profile' => Str::random(10),
        ];
    }
}
