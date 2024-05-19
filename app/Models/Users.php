<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
class Users extends Authenticatable
{
    use HasFactory, Notifiable;

// Specify the table name if it's different from the default convention
    protected $table = 'users';

    // Specify the primary key column name
    protected $primaryKey = 'u_id';

}
