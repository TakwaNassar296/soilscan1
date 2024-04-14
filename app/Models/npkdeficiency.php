<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class npkdeficiency extends Model
{
    use HasFactory;
    protected $fillable=[
        "Crop_Name","N_image","P_image","K_image"
    ];
}
