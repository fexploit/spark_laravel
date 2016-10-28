<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName', 100)->unique();
            $table->string('mail', 100)->unique();
            $table->string('phone', 15);
            $table->string('mobile', 15);
            $table->string('streetName', 100);
            $table->integer('houseNumber');
            $table->string('zip', 10);
            $table->string('city', 100);
            $table->string('country', 100);


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
        Schema::drop('customers');
    }
}
