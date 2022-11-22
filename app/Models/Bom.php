<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bom extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'tterigu',
        'ttapioka',
        'garam',
        'telur',
        'sawi',
        'price',
    ];
}
