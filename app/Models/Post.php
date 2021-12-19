<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAt()
    {
        return Carbon::parse($this->created_at);
    }

    public function getUpdatedAt()
    {
        return Carbon::parse($this->updated_at);
    }
}
