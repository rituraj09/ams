<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_master', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name',20); 
            $table->integer('academic_term_id', false, true); 
            $table->integer('academic_course_id', false, true);  
            $table->integer('academic_major_id', false, true); 
            $table->integer('total_seats'); 
            $table->integer('year'); 
            $table->boolean('is_delete')->default(0); 
            $table->boolean('is_active')->default(1); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_master');
    }
}
