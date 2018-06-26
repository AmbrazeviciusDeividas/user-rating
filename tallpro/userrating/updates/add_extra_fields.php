<?php namespace Tallpro\UserRating\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::table('clake_userextended_comments', function (Blueprint $table) {

            $table->char('rating');

        });
    }

    public function down(Blueprint $table)
    {
        $table->dropDown([
            'rating'
        ]);

    }
}
