<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahWisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_wisata','nama','no_hp','jam','alamat','deskripsi',
    ];


}
