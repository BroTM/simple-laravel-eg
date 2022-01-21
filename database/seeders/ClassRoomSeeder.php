<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        'name');
        'year');
        'address');
        'student_limit');
        */
        ClassRoom::create([
            [
                'name' => 'Section A',
                'year' => 'First Year',
                'address' => 'Building B, Block 3',
                'student_limit' => ''
            ],
            ['']
        ]);
    }
}
