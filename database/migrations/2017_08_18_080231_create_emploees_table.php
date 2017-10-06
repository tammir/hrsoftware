<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmploeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploees', function(Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('employee_id');
            $table->string('employee_type');
            $table->string('work_shift');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('gender');
            $table->string('home_district');
            $table->string('city');
            $table->string('address');
            $table->string('country');
            $table->string('contact_number');
            $table->string('emergency_contact');
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
        Schema::drop('emploees');
    }
}
