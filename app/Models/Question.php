<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'classroom_id',
        'content',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function getAnswersRandom()
    {
        return $this->hasMany(Answer::class)->inRandomOrder();
    }
}
