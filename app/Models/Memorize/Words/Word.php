<?php

namespace App\Models\Memorize\Words;

use App\Models\Memorize\Languages\Language;
use App\Models\Memorize\Words\Levels\Level;
use App\Models\Memorize\Words\Types\Type;
use App\Models\Memorize\Words\Types\WordType;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'language_id',
        'word',
        'translation',
        'type_id',
        'level_id',
        'example'
    ];

    // relations
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_words')
            ->withTimestamps();
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
