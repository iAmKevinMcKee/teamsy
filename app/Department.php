<?php

namespace App;

use App\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    protected static function booted()
    {
        static::addGlobalScope(new TenantScope);

        static::creating(function($department) {
            if(session()->has('tenant_id')) {
                $department->tenant_id = session()->get('tenant_id');
            }
        });
    }
}
