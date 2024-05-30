<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait Multitenantable {
	protected static function bootMultitenantable(): void {
		// Set the user_id when a model is being created
		static::creating(function ($model) {
			$model->user_id = Auth::id();
		});

		// Add a global scope to filter results by user_id
		if (Auth::check()) {
			static::addGlobalScope('created_by_user_id', function (Builder $builder) {
				if (!Auth::user()->is_admin) {
					$builder->where('user_id', Auth::id());
				}
			});
		}
	}
}
