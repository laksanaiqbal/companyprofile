<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    protected $table = "kontaks";
    protected $primarykey = "id";
    protected $fillable = ['id', 'sosmed', 'username', 'gambar'];
}
