<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'slug'
    ];


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'auther_id', 'id');
    }
}
