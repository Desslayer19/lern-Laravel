<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slag extends Model
{
    //Gunakan library fake
    protected $fillable = ['jenis_slag', 'nama_slag'];
    use HasFactory;

    public function kategoryPosts(): HasMany
    {
        return $this->hasMany(Post::class, 'kategori_id');
    }
}
