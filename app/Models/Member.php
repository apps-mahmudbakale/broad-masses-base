<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_birth',
        'place_of_birth',
        'passport_no',
        'profession',
        'qualification',
        'job',
        'fixed_phone',
        'phone',
        'current_residence',
        'skills',
        'hobby',
        'languages',
        'experience',
        'achievements',
        'party',
        'date_party',
        'survive',
        'date_resign',
        'reason_leaving',
        'reason_join',
        'offer',
        'ideas',
        'yourself',
        'acknowledgement'
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }
}
