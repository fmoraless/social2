<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Limpiamos tabla ususarios
        User::truncate();
        factory(User::class)->create(['email' => 'fmorales@mail.cl']);
    }
}
