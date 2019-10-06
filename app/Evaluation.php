<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'objective_grade',
        'challenge_grade',
        'rule_grade',
        'control_grade',
        'scenario_grade',
        'character_building_grade',
        'plot_grade',
        'graphic_grade',
        'audio_grade',
        'like',
        'dislike'
    ];
}