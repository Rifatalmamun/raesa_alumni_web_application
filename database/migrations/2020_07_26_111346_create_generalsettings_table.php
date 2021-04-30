<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalsettings', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('site_name');
            $table->string('site_logo');
            $table->string('site_title');
            $table->string('site_url')->nullable();
            $table->string('admin_email')->nullable();
            $table->string('currency')->nullable();

            $table->string('site_language')->nullable(); 

            $table->string('captca')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('fist_color')->nullable();
            $table->string('second_color')->nullable();

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
        Schema::dropIfExists('generalsettings');
    }
}
