<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    protected $table = "pendidikans";
    protected $primarykey = "id";
    protected $fillable = ['id', 'tahun_mulai', 'tahun_selesai', 'lokasi'];
}
