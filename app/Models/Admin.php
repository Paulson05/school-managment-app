<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use App\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use  Illuminate\Contracts\Auth\Authenticatable as  AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
class Admin  extends Model implements AuthenticatableContract
{
    use HasFactory,  HasRolesAndPermissions;
    use Authenticatable;
    protected $guarded = [];
    protected $table = 'admins';
}
