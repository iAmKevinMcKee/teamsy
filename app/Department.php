<?php

namespace App;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use BelongsToTenant;

    protected $guarded = [];
}
