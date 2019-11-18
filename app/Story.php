<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evaluation;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model
{
    use SoftDeletes;

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
