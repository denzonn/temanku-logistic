<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'resi',
        'photo',
        'status',
        'asal_pengiriman',
        'jumlah',
        'tujuan_pengiriman',
        'keterangan',
    ];
}
