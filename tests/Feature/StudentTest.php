<?php

namespace Tests\Feature;

use App\Models\Student;
use App\Repositories\StudentRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_save_student()
    {
        $this->saveMaintenance();

        $stu = Student::find(1);

        $this->assertEquals('Test Name',$stu->name);
    }

    public function test_edit_student()
    {
        $this->saveMaintenance();
        $repository = new StudentRepository(new Student());

        $data = [
            'id' => 1,
            'name' => 'Test'
        ];

        $repository->update($data);

        $student = Student::where('id',1)->first();

        $this->assertEquals('Test',$student->name);

        $this->assertTrue(true);
    }
    public function saveMaintenance()
    {
        $student = new StudentRepository(new Student());

        // $has = $student->has('hello',['hello','world']);
        // $this->assertTrue($has);

        $data = [
            'name' => 'Test Name',
            'rno' => 'Test Rno'
        ];
        $student->save($data);
    }
}
