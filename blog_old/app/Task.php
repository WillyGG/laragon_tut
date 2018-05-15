<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) // Task::incomplete()
    {
    	return $query->where("is_completed", 0);	
    }
}
