<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            
            $table->bigIncrements('id');                          
            $table->string('event_title')->nullable();         
            $table->string('event_picture')->nullable();           
            $table->string('event_link')->nullable();           
            $table->string('event_description')->nullable();   
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
        Schema::dropIfExists('events');
    }
}
