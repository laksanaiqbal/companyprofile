<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    protected $table = "biodatas";
    protected $primarykey = "id";
    protected $fillable = ['id', 'nama', 'tempat_lahir', 'tanggal_lahir', 'gambar', 'alamat', 'deskripsi'];
}
