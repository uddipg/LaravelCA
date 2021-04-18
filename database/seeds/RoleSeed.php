<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * 
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 2, 'title' => 'Simple user',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
