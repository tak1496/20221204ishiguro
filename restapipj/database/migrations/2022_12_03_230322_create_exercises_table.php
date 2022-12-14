<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table
                ->string('email')
                ->nullable(false)
                ->unique();
            $table->string('profile')->nullable(false);
            $table
                ->timestamp('created_at')
                ->useCurrent()
                ->nullable();
            $table
                ->timestamp('updated_at')
                ->useCurrent()
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
