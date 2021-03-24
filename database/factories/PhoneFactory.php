<?php

namespace database\factories;

use App\Phone;
use App\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    protected $model = Phone::class;

    public function definition()
    {
        return [
            'tenant_id' => Tenant::factory(),
        ];
    }
}
