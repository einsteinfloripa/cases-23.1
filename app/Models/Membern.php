<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membern extends Model
{
    use HasFactory;
    protected $table = 'memberns';
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'birthday'
    ];
}
