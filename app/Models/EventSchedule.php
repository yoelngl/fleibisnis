<?php

namespace App\Models;

use App\Models\EventCategory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventSchedule extends Model
{
    use HasFactory,Sluggable;

    protected $table = 'event_schedules';

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(EventCategory::class);
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
