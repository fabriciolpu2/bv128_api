<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = \Carbon\Carbon::now();

        $dev = User::firstOrCreate([
            'name' => 'Dev',
            'email' => 'dev@amplomed.com',
            'password' => bcrypt($password = 'amplomed'),
        ]);
        $dev->syncRoles(['desenvolvedor']);

        $anunciante = User::firstOrCreate([
            'name' => 'Administrador',
            'email' => 'admin@amplomed.com',
            'password' => bcrypt($password = 'amplomed'),
        ]);
        $anunciante->syncRoles(['administrador']);

        $editor = User::firstOrCreate([
            'name' => 'Editor',
            'email' => 'editor@amplomed.com',
            'password' => bcrypt($password = 'amplomed'),
        ]);
        $editor->syncRoles(['editor']);

    }
}
