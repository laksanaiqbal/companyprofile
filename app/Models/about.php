<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $table = "abouts";
    protected $primarykey = "id";
    protected $fillable = ['id', 'about'];
}
