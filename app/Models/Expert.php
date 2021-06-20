<?php

namespace App\Models;

use App\Models\AskExpert;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expert extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'experts';

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function ask(){
        return $this->hasMany(AskExpert::class);
    }

}
