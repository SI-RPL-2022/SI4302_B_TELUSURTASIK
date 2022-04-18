<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class wisata extends Model
{

    use HasFactory;
    protected $table = 'wisatas';

    
    protected $primaryKey = 'id_wisata';

    protected $fillable = [
    	'title',
    	'categorie',
    	'location',
    	'desc',
        'status',
    	'picture',
        'created_at',
        'updated_at'
    ];
    
  
}
