<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feild extends Model
{
    use HasFactory;

    protected $table = "feildes";

    protected $fillable=['title'];
}
