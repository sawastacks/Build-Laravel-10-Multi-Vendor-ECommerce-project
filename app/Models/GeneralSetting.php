<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_email',
        'site_phone',
        'site_meta_keywords',
        'site_meta_description',
        'site_address'
    ];
}
