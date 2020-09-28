<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialties extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'image',
        'user_id',
        'active'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
