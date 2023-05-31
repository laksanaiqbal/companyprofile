<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kemampuan extends Model
{
    protected $table = "kemampuans";
    protected $primarykey = "id";
    protected $fillable = ['id', 'kemampuan', 'level', 'gambar'];
}
