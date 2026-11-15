<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class lecture extends Model
{
    protected $fillable = [ 'title', 'topic_summary', 'hall_name', 
'scheduled_at'];
      public function course() :BelongsTo
    {

        return $this->belongsTo(Course::class);
 
    }
}
