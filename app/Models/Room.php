<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms'; // Nama tabel di database
    protected $fillable = ['nama_kamar', 'harga_per_malam']; // Kolom yang dapat diisi
}
