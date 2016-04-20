<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->unique();
            $table->string('business_reference', 200)->unique();
            $table->string('category', 40);
            $table->string('tel_no', 15);
            $table->string('mobile_no', 15)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('website', 64)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('postal_add', 40)->nullable();
            $table->text('location');
            $table->string('region', 50);
            $table->text('about');
            $table->string('logo', 100)->nullable()->default('logo_placeholder.jpg');
            $table->integer('rating')->nullable();
            $table->integer('user_id')->unsigned()->unique();
            $table->boolean('active')->default(0);
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
        Schema::drop('business_details');
    }
}
