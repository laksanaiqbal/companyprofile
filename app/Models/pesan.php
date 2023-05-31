<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table = "pesans";
    protected $primarykey = "id";
    protected $fillable = ['id', 'nama', 'email', 'nohp', 'isi',];
}
