<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evaluation;
use Illuminate\Database\Eloquent\SoftDeletes;

class AudioVisual extends Model
{
    use SoftDeletes;

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
