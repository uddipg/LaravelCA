<?php

use Illuminate\Database\Seeder;

class EventSeed extends Seeder
{
    /**
     * 
     * 
     *
     * @return void
     */
    public function run()
    {
        factory(App\Event::class, 10)->create();
    }
}
