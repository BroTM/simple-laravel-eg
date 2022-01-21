<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('students')->insert([
            ['name'=>"John Soe", "rno" => "5CS - 10"],
            ['name'=>"Smith", "rno" => "5CS - 1"],
            ['name'=>"Alice", "rno" => "5CS - 12"],
            ['name'=>"Grace", "rno" => "5CS - 2"],
            ['name'=>"Su Su", "rno" => "5CS - 3"],
            ['name'=>"Angel", "rno" => "5CS - 4"]
        ]);
    }
}
