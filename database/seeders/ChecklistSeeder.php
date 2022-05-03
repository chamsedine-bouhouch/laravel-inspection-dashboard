<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChecklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('checklists')->insert([
                'title'=>'checklist_title_'.$i, 
                'date_inspection'=>now(),
                'user_id'=>$i+1,
            
            ]);
        }
    }
}
