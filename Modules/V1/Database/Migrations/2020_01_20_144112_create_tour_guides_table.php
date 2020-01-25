<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourGuidesTable extends Migration 
{
    public function up() 
    {
        Schema::create('tour_guides', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 256);
            $table->string('description', 4096);
            $table->string('audio', 128);
                // ManyToOne Tour relationship
            $table->unsignedBigInteger('tour_id');
            $table->foreign('tour_id', 'idx_fk_tour_id')->references('id')->on('tour');
            $table->string('language', 3);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('tour_guides');
    }

}
