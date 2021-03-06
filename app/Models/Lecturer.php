<?php

namespace App\Models;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use  Illuminate\Contracts\Auth\Authenticatable as  AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
class Lecturer  extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $guarded = [];
    protected $table = 'lecturers';
}

