<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create([
            'name' => 'Hana Azzah Nur Arifah',
            'email' => 'hanaazzah42@gmail.com'
        ]);
    }
}
