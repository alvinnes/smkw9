<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = ['id', 'updated_at', 'created_at'];

    public function scopeActivityItem(Builder $query)
    {
        return $query->limit(6);
    }
}
