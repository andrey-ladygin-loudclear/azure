<?php

namespace Azure;

use Azure\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function scopeFilter($query, QueryFilter $filters)
    {
        return $filters->apply($query);
    }
}
