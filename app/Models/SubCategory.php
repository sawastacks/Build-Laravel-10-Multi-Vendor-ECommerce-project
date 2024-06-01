<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class SubCategory extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'category_id',
        'subcategory_name',
        'subcategory_slug',
        'is_child_of',
        'ordering'
    ];

    public function sluggable(): array
    {
        return [
            'subcategory_slug' => [
                'source' => 'subcategory_name'
            ]
        ];
    }

    public function parentcategory(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function children(){
        return $this->hasMany(SubCategory::class,'is_child_of','id')->orderBy('ordering','asc');
    }
}
