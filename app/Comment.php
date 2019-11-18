<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Evaluation;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'evaluation_id',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
