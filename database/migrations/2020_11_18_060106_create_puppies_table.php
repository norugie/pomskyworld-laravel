<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuppiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puppies', function (Blueprint $table) {
            $table->id();
            $table->string('puppy_name');
            $table->integer('puppy_age_year');
            $table->integer('puppy_age_month');
            $table->enum('puppy_gender', ['Male', 'Female']);
            $table->text('puppy_desc');
            $table->enum('puppy_status', ['Available', 'Adopted', 'Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puppies');
    }
}
