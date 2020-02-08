<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCityCountryLangToTourGuides extends Migration
{
    private const TABLE = 'tour_guides';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->integer('country_id', false, true)->index('idx_country_id');
            $table->bigInteger('city_id', false, true)->index('idx_city_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->dropIndex('idx_country_id');
            $table->dropIndex('idx_city_id');
            $table->dropColumn('country_id');
            $table->dropColumn('city_id');
        });
    }
}
