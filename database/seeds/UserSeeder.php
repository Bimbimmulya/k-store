<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bimbim',
            'email' => 'Bimbimmk24@gmail.com',
            'password' => Hash::make('bimbim123'),
            'address' => 'JL. Amd Gaga Larangan, Ciledug, Tangerang 15154',
            'phone_number' => '082278830533',
            'role' => 'admin'
        ]);
    }
}
