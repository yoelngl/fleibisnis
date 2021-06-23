<?php

namespace App\Models;

use App\Models\FranchiseWeek;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventCategory extends Model
{
    use HasFactory,Sluggable;

    protected $table = 'event_categories';

    protected $guarded = ['id'];

    public function franchise_week(){
        return $this->hasMany(FranchiseWeek::class,'category_id');
    }

    public function event_schedule(){
        return $this->hasMany(EventSchedule::class,'category_id');
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
