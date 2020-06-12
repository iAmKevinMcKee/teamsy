<?php

namespace App;

use App\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected static function booted()
    {
        static::addGlobalScope(new TenantScope);

        static::creating(function($model) {
            if(session()->has('tenant_id')) {
                $model->tenant_id = session()->get('tenant_id');
            }
        });
    }
}
