<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'category_name',
        'category_slug',
        'category_image',
        'ordering'
    ];

    public function sluggable(): array
    {
        return [
            'category_slug' => [
                'source' => 'category_name'
            ]
        ];
    }

    public function subcategories(){
        return $this->hasMany(SubCategory::class,'category_id','id');
    }
}
