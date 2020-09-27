<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'text',
        'type_id',
        'active'
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
