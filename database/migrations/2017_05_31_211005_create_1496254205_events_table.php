<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1496254205EventsTable extends Migration
{
    /**
     * 
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('events')) {
            Schema::create('events', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('description')->nullable();
                $table->datetime('start_time');
                $table->text('venue');
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
