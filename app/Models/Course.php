<?php

// app/Models/Course.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'slug'];

    public function materials()
    {
        return $this->hasMany(LearningMaterial::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}

