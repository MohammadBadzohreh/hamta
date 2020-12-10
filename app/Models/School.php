<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = "schools";
    protected $fillable = [
        "about_us",
        "about_us_image",
        "school_logo",
        "telegram_link",
        "instagram_link",
        "email",
        "school_address",
    ];

    public function contacts()
    {
        return $this->hasMany(SchoolInfo::class,"school_id","id");
    }
}
