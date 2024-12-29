<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    const TECHNOLOGY = 'Technology';
    const HEALTH_AND_WELLNESS = 'Helth And Wellness';
    const LIFESTYLE = 'Lifestyle';
    const BUSINESS_AND_FINANCE = 'Business And Finance';
    const ENTERTAINMENT = 'Entertainment';
    const EDUCATION = 'Education';
    const SCIENCE = 'Science';
    const SPORTS = 'Sports';
    const POLITICS = 'Politics';


    public const CATEGORIES = [
        self::TECHNOLOGY,
        self::HEALTH_AND_WELLNESS,
        self::LIFESTYLE,
        self::BUSINESS_AND_FINANCE,
        self::ENTERTAINMENT,
        self::EDUCATION,
        self::SCIENCE,
        self::SPORTS,
        self::POLITICS
    ];


    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
