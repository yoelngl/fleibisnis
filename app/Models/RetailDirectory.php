<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Categories;
use App\Models\User;

class RetailDirectory extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'retail_directories';

    protected $guarded = [
      'id'
    ];

    public function category(){
      return $this->belongsTo(Categories::class);
    }

    public function user(){
      return $this->belongsTo(User::class, 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }
}
