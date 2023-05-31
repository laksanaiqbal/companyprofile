<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    protected $table = "layanans";
    protected $primarykey = "id";
    protected $fillable = ['id', 'layanan', 'deskripsi', 'gambar'];
}
