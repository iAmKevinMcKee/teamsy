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

        Tenant::factory()->count(3)->create();

        foreach(Tenant::all() as $tenant) {
            User::factory()->count(20)->create([
                                                   'tenant_id' => $tenant->id,
                                               ]);
        }

        foreach(User::all() as $user) {
            Login::factory()->count(5)->create([
                                                   'user_id' => $user->id,
                                                   'tenant_id' => $user->tenant_id,
                                               ]);
        }
        User::factory()->count(1)->create([
                                              'tenant_id' => null,
                                              'email' => 'admin@admin.com',
                                          ]);
    }
}
