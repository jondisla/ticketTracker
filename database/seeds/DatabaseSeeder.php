<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->create(array (
            0 => 
              array (
                     'department' => 'IT'
             ),
            1 => 
              array (
                'department' => 'Repair'
             ),
         ));
    }
}
