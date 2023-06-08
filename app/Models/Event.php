<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Event extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [

        'image',
        'date',
        'time',
        'event_name',
        'venue',
        'address',
        'category_id',
        'description',
        'price_per_ticket',
        'phone',
        'email',


    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function registerMediaConversions(?Media $media = null): void
    // {
    //     $this->addMediaConversion('thumb')
    //         ->width(368)
    //         ->height(232);
    // }
}
