<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function mark(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Mark::class);
    }
}
