<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassStudent extends Pivot
{
    protected $table = "class_students";
    protected $fillable = ["student_id", "class_id"];
}
