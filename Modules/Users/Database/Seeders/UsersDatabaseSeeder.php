<?php

namespace Modules\Users\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $user = User::factory()->withPersonalTeam()->create(['email' => 'admin@admin.com']);

        $user->assignRole('Administrator');

        $user = User::factory()->withPersonalTeam()->create(['email' => 'fotsa.goldoni@yahoo.fr']);

        $user->assignRole('User');

        User::factory(50)->withPersonalTeam()->create();

        $users = User::get();

        foreach ($users as $user) {
            $user->assignRole('User');
        }
    }
}
