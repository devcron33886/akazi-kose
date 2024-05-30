<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait Multitenantable
{
    protected static function bootMultitenantable(): void
    {
        static::creating(function ($model) {
            $model->user_id = Auth::id();
        });

        if (Auth::check() && ! Auth::user()->is_admin) {
            static::addGlobalScope('created_by_user_id', function (Builder $builder) {
                $builder->where('user_id', Auth::id());
            });
        }
    }
}
