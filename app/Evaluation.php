<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Game;
use App\GameMechanic;
use App\Story;
use App\AudioVisual;
use App\Comment;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'game_id',
        'title',
        'description',
        'grade',
        'like',
        'dislike'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function gameMechanic()
    {
        return $this->hasOne(GameMechanic::class);
    }

    public function story()
    {
        return $this->hasOne(Story::class);
    }

    public function audioVisual()
    {
        return $this->hasOne(AudioVisual::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
