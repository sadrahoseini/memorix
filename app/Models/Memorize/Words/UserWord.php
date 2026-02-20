<?php

namespace App\Models\Memorize\Words;

use App\Models\Memorize\Practices\Practice;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;

class UserWord extends Model
{
    protected $fillable = [
        'user_id',
        'word_id'
    ];

    // relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function word()
    {
        return $this->belongsTo(Word::class);
    }

    public function practices()
    {
        return $this->hasMany(Practice::class);
    }
}
