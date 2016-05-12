<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToBusinessDetails extends Migration
{
    /**
     * Add the 'user_id' and 'category_id' foreign keys
     * to the business_details table
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_details', function (Blueprint $table) {

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Remove the 'user_id' and 'category_id' foreign keys
     * to the business_details table
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_details', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('category_id');
        });
    }
}
