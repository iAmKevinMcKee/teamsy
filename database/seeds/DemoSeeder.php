<?php

use App\Login;
use App\Tenant;
use App\User;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tenant::class, 3)->create();

        foreach(Tenant::all() as $tenant) {
            factory(User::class, 20)->create([
                'tenant_id' => $tenant->id,
            ]);
        }

        foreach(User::all() as $user) {
            factory(Login::class, 5)->create([
                'user_id' => $user->id,
                'tenant_id' => $user->tenant_id,
            ]);
        }

        factory(User::class)->create([
            'tenant_id' => null,
            'email' => 'admin@admin.com',
        ]);
    }
}
