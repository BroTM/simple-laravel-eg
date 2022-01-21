<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'rno'];

    public function class_room()
    {
        return $this->belongsTo(ClassRoom::class,'class_room_id','id');
    }
}
