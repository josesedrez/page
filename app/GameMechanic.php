<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evaluation;

class GameMechanic extends Model
{
    protected $fillable = [
        'objective_grade',
        'challenge_grade',
        'rule_grade',
        'control_grade',
        'evaluation_id'
    ];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
