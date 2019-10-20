<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evaluation;

class Story extends Model
{
    protected $fillable = [
        'scenario_grade',
        'character_building_grade',
        'plot_grade',
        'evaluation_id'
    ];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
