<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
     // truncating db with foreign key constraint
     DB::statement('SET FOREIGN_KEY_CHECKS=0;');
     App\Band::truncate(); 
     App\Album::truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS=1;');


      factory(App\Band::class, 50)->create();
      factory(App\Album::class, 150)->create();

    }
}
