<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class maresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mar=['pacifico','atlantico','salado'];

        for ($i=0; $i <10; $i++) { 
            DB::table('mar')->insert([
                'nombre_mar' => $mar[rand(0,count($mar)-1)]
            ]);        
        }
    }
}
