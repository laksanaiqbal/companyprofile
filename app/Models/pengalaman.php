<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalaman extends Model
{
    protected $table = "pengalamans";
    protected $primarykey = "id";
    protected $fillable = ['id', 'tahun', 'pengalaman',];
}
