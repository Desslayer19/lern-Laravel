<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    use HasFactory;
    protected $fillable = ['slag', 'judul', 'pembuat', 'tanggal', 'article'];

    protected $with = ['pembuat', 'kategori'];

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Slag::class, 'kategori_id');
    }

    #[Scope]
    public function filter(Builder $query, array $sortir): void
    {
        $query->when($sortir['search_key'] ?? false, function ($query, $data){
            return $query->where('judul', 'like','%'. $data .'%');
        });
        // pencarian data di kategori blog
        $query->when($sortir['kategori'] ?? false, function($query, $kategori){
            return $query->whereHas('kategori', 
                fn(Builder $query) =>
                $query->where('nama_slag', $kategori)
            );
        });
        // pencarian di penulis blog
        $query->when($sortir['pembuat'] ?? false, function($query, $pembuat){
            return $query->whereHas('pembuat', 
                fn(Builder $query) =>
                $query->where('slug_name', $pembuat)
            );
        });
    }
}