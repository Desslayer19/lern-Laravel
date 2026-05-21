<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slag extends Model
{
    //Gunakan library fake
    protected $fillable = ['jenis_slag', 'nama_slag'];
    use HasFactory;
}
