<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    protected $student;

    public function __construct(Student $model)
    {
        $this->student = $model;
    }

    public function save($validated)
    {
        $student = $this->student::create($validated);
        return $student->fresh();
    }

    public function update($validated)
    {
        $student = $this->student::find($validated['id']);

        $student->update($validated);
    }

    public function has($item, $arr)
    {
        return in_array($item, $arr);
    }

}
