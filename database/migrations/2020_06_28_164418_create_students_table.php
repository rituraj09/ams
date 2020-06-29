<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('ack_no',50)->nullable(); 
            $table->string('email',50)->nullable();
            $table->string('email_otp',28)->nullable(); 
            $table->boolean('email_verified')->default(0); 
            $table->timestamp('email_verified_at')->nullable();

            $table->string('mobile',50)->nullable();
            $table->string('mobile_otp',28)->nullable();
            $table->boolean('mobile_verified')->default(0); 
            $table->timestamp('mobile_verified_at')->nullable();

            $table->string('password',200)->nullable();  

            $table->string('fathers_name',200)->nullable();  
            $table->string('mothers_name',200)->nullable();  
            $table->date('dob')->nullable();
            $table->integer('gender')->nullable();  //FK
            $table->integer('caste')->nullable();  //FK
            $table->integer('is_minority')->nullable(); 
            $table->integer('religion')->nullable(); 
            $table->integer('is_pwd')->nullable();  
            $table->string('aadhar',30)->nullable();   
            $table->string('permanent_address',200)->nullable();
            $table->string('permanent_post_office',100)->nullable();
            $table->string('permanent_police_station',100)->nullable();
            $table->string('permanent_pin',6)->nullable();
            $table->integer('permanent_district')->nullable();  //FK
            $table->string('parents_phone',15)->nullable();
            $table->string('parents_email',50)->nullable();
  
            $table->string('local_guardians',100)->nullable();            
            $table->string('local_address',200)->nullable();
            $table->string('local_post_office',100)->nullable();
            $table->string('local_police_station',100)->nullable();
            $table->string('local_pin',6)->nullable();
            $table->integer('local_district')->nullable(); //FK  
            $table->string('local_phone',15)->nullable();
            $table->string('local_email',50)->nullable();
            $table->string('photo_path',200)->nullable();   
            $table->integer('status')->default(0); 
            $table->boolean('is_active')->default(0);            
            $table->boolean('is_delete')->default(0);         
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
