<?php

namespace App;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use BelongsToTenant;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function privateUrl()
    {
        return url('/documents/' . $this->user_id . '/' . $this->filename);
    }
}
