<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\NewsCategories;
use App\Models\User;


class TodayNews extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'today_news';

    protected $guarded = ['id'];

    public function category(){
      return $this->belongsTo(NewsCategories::class,'category_id','id');
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

    protected $dates = ['created_at'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


}
