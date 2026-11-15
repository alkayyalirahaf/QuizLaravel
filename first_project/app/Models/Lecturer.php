<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class lecturer extends Model
{

protected $table = [ 'employee_number', 'department', 'office_room', 'photo', 'isActivated'];

      public function user () :BelongsTo
    {

        return $this->belongsTo(User::class);
 
    }

      public function courses():HasMany{
        return $this->hasMany(Course::class);
    }
    
}
