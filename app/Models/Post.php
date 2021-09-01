<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;


class Post extends Model
{
    use HasFactory, Sluggable, Searchable;


    protected $fillable = ['title', 'slug', 'description', 'image_path', 'user_id'];

    public function searchableAs()
    {
        return 'posts';
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [ 
                'source' => 'title'
            ]
        ];
    }
}
