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
            $table->string('reference', 200)->unique();
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
            $table->string('logo', 100)->nullable()->default('yunga_business_logo_placeholder.jpg');
            $table->integer('rating')->nullable();
            $table->string('category_id')->unsigned();;
            $table->integer('user_id')->unsigned();
            $table->boolean('active')->default(0);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade');
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
