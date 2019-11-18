<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Evaluation;

class Game extends Model
{
    use SoftDeletes;

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
