<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'has_period',
        'period_start',
        'period_end',
        'category'
    ];

    public function features()
    {
        return $this->hasMany(LessonFeatures::class);
    }
}
