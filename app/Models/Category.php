<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $guarded = [];

    public function adverts(): HasMany
    {
        return $this->hasMany(Advert::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'slug' => 'name',
            ],
        ];
    }
}
