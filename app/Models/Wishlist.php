<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user', 'id_wisata', 'created_at', 'updated_at'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function wisata() {
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
