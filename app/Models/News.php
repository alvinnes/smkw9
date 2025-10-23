<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class News extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGetNews(EloquentBuilder $query)
    {
        return $query->limit(6)->get();
    }
}
