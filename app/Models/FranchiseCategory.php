<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\FranchiseDirectory;

class FranchiseCategory extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'franchise_categories';

    protected $fillable = [
        'title',
        'slug'
    ];

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
