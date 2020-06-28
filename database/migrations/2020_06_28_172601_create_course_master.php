<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_master', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name',300); 
            $table->integer('total_term');  
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
        Schema::dropIfExists('course_master');
    }
}
