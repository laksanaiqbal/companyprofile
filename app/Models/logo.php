<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logo extends Model
{
    protected $table = "logos";
    protected $primarykey = "id";
    protected $fillable = ['id', 'gambar', 'status',];
}
