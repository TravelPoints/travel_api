<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLangOrderFieldsToTourGuides extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour_guides', function (Blueprint $table) {
            $table->char('lang', 3);
            $table->unsignedMediumInteger('order');
            $table->decimal('lat', 11, 7);
            $table->decimal('lng', 11, 7);
            $table->index(['lat', 'lng'], 'idx_coords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_guides', function (Blueprint $table) {
            $table->dropColumn('lang');
            $table->dropColumn('order');
            $table->dropColumn('lat');
            $table->dropColumn('lng');
            $table->dropSpatialIndex('idx_coords');
        });
    }
}
