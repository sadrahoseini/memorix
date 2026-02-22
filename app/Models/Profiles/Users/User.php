<?php

namespace App\Models\Profiles\Users;

use App\Models\Memorize\Languages\Language;
use App\Models\Memorize\Words\Word;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'password',
        'language_id'
    ];

    // relations
    public function languages() 
    {
        return $this->belongsToMany(Language::class, 'user_languages')
            ->withTimestamps();
    }

    public function activeLanguage() 
    {
        return $this->belongsToMany(Language::class, 'user_languages')
            ->wherePivot('active', true)
            ->withTimestamps();
    }

    public function words()
    {
        return $this->belongsToMany(Word::class, 'user_words')
            ->withTimestamps();
    }
}
