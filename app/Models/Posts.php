<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;
    protected $guarded = [''];

    // Satu Posts Berelasi Dengan Satu Kegiatan
    public function kegiatan(): BelongsTo
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }

    // Satu Posts Berelasi Dengan Satu User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
