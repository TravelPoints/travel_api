<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTable extends Migration 
{
    public function up() 
    {
        Schema::create('tour', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('duration');
            $table->index('duration', 'idx_duration');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('tour');
    }

}
