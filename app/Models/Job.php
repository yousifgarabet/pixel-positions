<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    function employer() : BelongsTo {
        return $this->belongsTo(Employer::class);
    }

    function tag() {

    }
    function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
