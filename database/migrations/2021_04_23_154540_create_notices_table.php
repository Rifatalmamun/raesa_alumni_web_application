<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            
            $table->bigIncrements('id');                          
            $table->string('notice_title')->nullable(); 
            $table->string('notice_picture')->nullable();           
            $table->string('notice_link')->nullable();           
            $table->string('notice_description')->nullable();   
            $table->string('date')->nullable();                      
            $table->string('time')->nullable();                   

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
