<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicTermMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_term_master', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name',100); 
            $table->integer('total_month'); 
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
        Schema::dropIfExists('academic_term_master');
    }
}
