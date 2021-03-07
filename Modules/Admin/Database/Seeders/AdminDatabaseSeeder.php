<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@sharanam.com',
            'email_verified_at' => now(),
            'password' => '6eBOHSNSy$i2mrBQ!VbY',
        ]);
    }
}
