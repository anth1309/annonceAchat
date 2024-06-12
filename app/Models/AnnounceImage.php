<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnounceImage extends Model
{
    protected $fillable = ['announce_id', 'image_path'];

    public function announce()
    {
        return $this->belongsTo(Announce::class);
    }
}
