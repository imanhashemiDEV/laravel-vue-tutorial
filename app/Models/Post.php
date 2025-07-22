<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'image',
        'short_description',
        'description',
    ];

    protected $appends =['src'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getSrcAttribute()
    {
        return asset('images/posts/'. $this->image);
    }
}
