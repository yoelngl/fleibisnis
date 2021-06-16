<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\RetailDirectory;

class Categories extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'categories';

    protected $fillable = [
        'title',
        'slug'
    ];

    public function retail(){
      return $this->hasMany(RetailDirectory::class,'category_id');
    }

    public function franchise(){
        return $this->hasMany(FranchiseDirectory::class,'category_id');
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
