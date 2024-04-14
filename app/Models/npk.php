<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class npk extends Model
{
    use HasFactory;
    protected $fillable=[
        'Crops','N','P','K'
    ];
}
