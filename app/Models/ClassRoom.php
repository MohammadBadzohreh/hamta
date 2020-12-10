<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $table = "classes";
    protected $fillable = ["teacher_id", "grade_id", "field_id", "title"];


    public function teacher()
    {
        return $this->belongsTo(User::class, "teacher_id", "id");
    }

    public function students()
    {
//        todo add student
    }
}
