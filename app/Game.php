<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evaluation;

class Game extends Model
{
    protected $fillable = [
        'title',
        'description',
        'grade',
        'cover',
        'parental_rating'
    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}