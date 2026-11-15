<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Course extends Model
{
    protected $fillable = ['course_code', 'title', 'credit_hours', 
'semester'];
    public function courses():HasMany{
        return $this->hasMany(Lecture::class);


    }
        
       public function user () :BelongsTo
    {

        return $this->belongsTo(Lecturer::class);
 
    }




public function users(): BelongsToMany
{
    return $this->belongsToMany(
        User::class,
        'course_user',
        'course_id',
        'user_id'
    )->withPivot([
        'enrollment_date', 'grade', 
    ])->withTimestamps();
}


}
