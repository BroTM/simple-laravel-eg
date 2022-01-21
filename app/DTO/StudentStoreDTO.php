<?php

namespace App\DTO;

use App\Http\Requests\StudentStoreRequest;
use Spatie\DataTransferObject\DataTransferObject;

class StudentStoreDTO extends DataTransferObject
{
    public string $name;
    public string $rno;

    // public static function fromRequest(StudentStoreRequest $request) :self
    // {
    //     return new self([

    //     ]);
    // }

    public static function fromRequest(StudentStoreRequest $request) :self
    {
        return new self([
            'name' => $request->input('name'),
            'rno' => $request->input('rno')
        ]);
    }
}
