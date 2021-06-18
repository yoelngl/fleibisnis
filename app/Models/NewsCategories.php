<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\TodayNews;


class NewsCategories extends Model
{
    use HasFactory;
    use Sluggable;


    protected $table = 'news_categories';

    protected $fillable = [
        'title',
        'slug'
    ];

    public function retail(){
      return $this->hasMany(NewsCategories::class,'category_id');
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
