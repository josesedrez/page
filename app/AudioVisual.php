<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evaluation;

class AudioVisual extends Model
{
    protected $fillable = [
        'graphic_grade',
        'audio_grade',
        'evaluation_id'
    ];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
