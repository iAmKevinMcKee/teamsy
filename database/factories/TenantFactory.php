<?php

namespace database\factories;

use App\Tenant;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantFactory extends Factory
{
    protected $model = Tenant::class;
    public function definition()
    {
        return [
            'name' => $this->faker->company,
        ];
    }
}
