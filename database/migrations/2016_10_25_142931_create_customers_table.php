<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            //Link user_id from users table
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            //Company
            $table->string('c_name', 100)->unique();
            $table->string('c_email')->unique();
            $table->string('c_phone', 15);
            $table->string('c_street', 100);
            $table->integer('c_streetNum');
            $table->string('c_zip', 10);
            $table->string('c_city', 100);
            $table->string('c_country', 100);
            $table->integer('c_kvk')->unique();
            $table->string('c_btw', 15)->unique();

            //Contact person
            $table->string('p_firstName', 50);
            $table->string('p_lastName', 50);
            $table->string('p_email')->unique();
            $table->string('p_phone', 15);
            $table->string('p_mobile', 15);
            $table->string('p_street', 100);
            $table->integer('p_streetNum');
            $table->string('p_zip', 10);
            $table->string('p_city', 100);
            $table->string('p_country', 100);

            //dates
            $table->timestampTz('added_on');
            $table->dateTimeTz('ending_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::drop('customers');
    }
}
