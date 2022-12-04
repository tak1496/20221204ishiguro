<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'yamada',
            'email' => 'yamada@example.com',
            'profile' => 'yamada_profile',
        ];
        $exer = new Exercise();
        $exer->fill($param)->save();

        $param = [
            'name' => 'sato',
            'email' => 'sato@example.com',
            'profile' => 'sato_profile',
        ];
        $exer = new Exercise();
        $exer->fill($param)->save();

        $param = [
            'name' => 'tanaka',
            'email' => 'tanaka@example.com',
            'profile' => 'tanaka_profile',
        ];
        $exer = new Exercise();
        $exer->fill($param)->save();
    }
}
