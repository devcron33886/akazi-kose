<?php

namespace App\Models;

use App\Models\Scopes\FaqScope;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use HasFactory, Sluggable,SoftDeletes;

    protected $guraded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public static function booted(): void
    {
        static::addGlobalScope(new FaqScope);
    }
}
