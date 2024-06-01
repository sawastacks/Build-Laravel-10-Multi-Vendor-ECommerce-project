<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'youtube_url',
        'github_url',
        'linkedin_url'
    ];
}
