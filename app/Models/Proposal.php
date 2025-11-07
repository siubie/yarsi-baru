<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    /** @use HasFactory<\Database\Factories\ProposalFactory> */
    use HasFactory;
    //add fillable fields
    protected $fillable = [
        'title',
        'presentation_file',
        'document_file',
        'status',
        'user_id',
    ];

    //add relation to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
