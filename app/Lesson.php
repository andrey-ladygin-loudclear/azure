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

    public function addUser($user)
    {
        $this->guardAgainstTooManyUsers();

        if($user instanceof User) {
            return $this->users()->save($user);
        }

        return $this->users()->saveMany($user);
    }

    public function guardAgainstTooManyUsers()
    {
        if($this->users > 5)
        {
            throw new \Exception();
        }
    }
}
