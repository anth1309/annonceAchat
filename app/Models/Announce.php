<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $fillable = ['title', 'city', 'price', 'comment', 'date', 'link'];

    public function photos()
    {
        return $this->hasMany(AnnounceImage::class);
    }
}
