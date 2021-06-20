<?php

namespace App\Models;

use App\Models\Expert;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AskExpert extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'ask_experts';

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // public function expert(){
    //     $this->belongsTo(Expert::class,'id','expert_id');
    // }
    public function expert(){
      return $this->belongsTo(Expert::class);
    }
}
