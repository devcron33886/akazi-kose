<?php

namespace App\Models;

use App\Models\Scopes\AdvertScope;
use App\Models\Traits\Multitenantable;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advert extends Model {
	use HasFactory, Multitenantable, Sluggable, SoftDeletes;

	protected $guarded = [];

	public function category(): BelongsTo {
		return $this->belongsTo(Category::class);
	}

	public function institution(): BelongsTo {
		return $this->belongsTo(Institution::class);
	}

	public function sluggable(): array {
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}

	public function getFormattedDateAttribute() {
		return $this->created_at->format('d-m-Y');
	}

	public function getFormattedDeadlineAttribute() {
		return Carbon::parse($this->attributes['deadline'])->format('d-m-Y');
	}

	public static function booted(): void {
		static::addGlobalScope(new AdvertScope);
	}

	public function user(): BelongsTo {
		return $this->belongsTo(User::class);
	}
}
