<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Models\mar;

class tiburonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiburones=['toro','tigre','blanco'];
        $mares= mar::all();

        for ($i=0; $i <15; $i++) { 
            DB::table('tiburon')->insert([
                'nombre_tiburon' => $tiburones[rand(0,count($tiburones)-1)],
                'id_mar' => $mares->random()->id
            ]);        
        }
    }
}
