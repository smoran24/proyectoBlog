<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'image_path', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class); //con esto defino que para cada usuario hay multiples posteos
    }
    public function sluggable(): array{ //hago que el nombre de la imagen a guardar tenga el titulo del post (slug)
        return['slug'=>['source' => 'title']];
    }
    
}
