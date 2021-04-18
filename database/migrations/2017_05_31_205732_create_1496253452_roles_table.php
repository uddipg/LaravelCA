<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1496253452RolesTable extends Migration
{
    /**
     * 
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                
                $table->timestamps();
                
            });
        }
    }

    /**
     * 
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
