<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'postcode',
        'prefecture',
        'city',
        'local',
        'street_address',
        'business_hour',
        'regular_holiday',
        'phone',
        'fax',
        'url',
        'license_number',
        'image',
    ];

    public function getPrefNameAttribute()
    {
        return config('pref.' . $this->prefecture);
    }
}
