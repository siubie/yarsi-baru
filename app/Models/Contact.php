<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;
    //fillable fields
    protected $fillable = [
        'name',
        'email',
        'phone',
        'user_id',
    ];

    //relation to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
