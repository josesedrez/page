<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evaluation;

class Game extends Model
{
    protected $fillable = [
        'title',
        'description',
        'grade'
    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}