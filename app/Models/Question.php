<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $guarded = [];
    public function optionsdata()
    {
        return $this->hasMany(Option::class, 'questions_id')->inRandomOrder();
    }
    public function quizes()
    {
        return $this->belongsTo(quizes::class, 'quiz_id');
    }

}
