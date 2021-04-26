<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exams';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'author_id', 'attempt_number', 'status', 'passing_score'];

    public function quizes()
    {
        return $this->hasMany(Quiz::class, 'exam_id', 'id');
    }
}
