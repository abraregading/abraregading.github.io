<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'administrator',
                'email' => 'admin@admin.com',
                'level' => 'admin',
                'password' => bcrypt('123456')
            ],
            [
                'username' => 'user',
                'name' => 'siswa',
                'email' => 'siswa@siswa.com',
                'level' => 'siswa',
                'password' => bcrypt('123456')
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
