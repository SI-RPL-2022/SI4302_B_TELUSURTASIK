<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $primaryKey = "id_wisata";

    public function reviews() {
        return $this->hasMany(Review::class, 'id_wisata');
    }
}
