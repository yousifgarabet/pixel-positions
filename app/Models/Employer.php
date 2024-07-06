<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory;

    // Return type is optional
    function user(): BelongsTo {
        return $this->BelongsTo(User::class);
    }

    function jobs(): HasMany {
        return $this->hasMany(Job::class);
    }
}
