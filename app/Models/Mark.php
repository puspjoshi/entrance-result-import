<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Mark extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['category'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
