<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RFQ extends Model
{
    use HasFactory;

    protected $fillable = [
        "vendor_id",
        "referensi",
        "tanggal_order",
        "qty",
        "harga",
        "total",
    ];
}