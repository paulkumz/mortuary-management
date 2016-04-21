<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('entries', function(Blueprint $table) {
           $table->increments('id');
           $table->string('first_name');
           $table->string('last_name');
           $table->date('dob')->nullable();
           $table->date('dod')->nullable(); 
           $table->string('sex');
           $table->string('age');
           $table->string('death_id');
           $table->string('kin');
           $table->string('address');
           $table->string('medical');
           $table->string('funeral');
           $table->string('illness');
           $table->string('duration');
           $table->string('death_cause');
           $table->string('medication');
           $table->string('post_mortem');
           $table->string('mortuary');
           $table->string('hospital');
           $table->string('remember_token')->nullable();
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
         Schema::drop('entries');
    }
}
