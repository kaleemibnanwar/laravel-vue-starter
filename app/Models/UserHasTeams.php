<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mpociot\Teamwork\Traits\UserHasTeams;

class User extends Model
{
    use UserHasTeams;
}
