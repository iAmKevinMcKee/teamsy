<?php

namespace App;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use BelongsToTenant;
}
