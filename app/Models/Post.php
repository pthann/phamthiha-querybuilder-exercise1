<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getCreatedAtFormattedAttribute()
    {
        return date('d, l F Y', strtotime($this->created_at));
    }

    
    public function getStatusAttribute($value)
    {
        return (bool) $value;
    }
}