<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course_User extends Model
{
protected $filable = ['enrollment_date', 'grade',];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

     public function courses():BelongsTo{
        return $this->belongsTo(Course::class);
    }
}
