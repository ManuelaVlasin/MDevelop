<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonFeatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature_name',
        'lesson_id',
    ];
}
