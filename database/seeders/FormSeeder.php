<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('forms')->insert([
                'title'=>'form'.$i
            ]);
        }

        $indexedArray = array('YN','QA');
        for ($i=0; $i < 10; $i++) { 
            DB::table('questions')->insert([
                'title'=>'question'.$i,
                'type'=>$indexedArray[array_rand($indexedArray)],
                'form_id'=>rand(1,8)
            ]);
         
        }
        
  
       
    }
}
