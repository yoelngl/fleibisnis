<?php

namespace App\Models;

use App\Models\Categories;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FranchiseDirectory extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'franchise_directories';

    protected $guarded = ['id'];


    public function category(){
        return $this->belongsTo(Categories::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'brand_name'
            ]
        ];
    }
}
