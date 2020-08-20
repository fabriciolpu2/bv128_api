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
            'email' => 'dev@mail.com',
            'password' => bcrypt($password = 'password'),
        ]);

        $dev->syncRoles(['desenvolvedor']);

        $dev = User::firstOrCreate([
            'name' => 'Administrador',
            'email' => 'admin@mail.com',
            'password' => bcrypt($password = 'password'),
        ]);

        $dev->syncRoles(['administrador']);

        $editor = User::firstOrCreate([
            'name' => 'Editor',
            'email' => 'editor@mail.com',
            'password' => bcrypt($password = 'password'),
        ]);

        $editor->syncRoles(['editor']);

        $professor = User::firstOrCreate([
            'name' => 'Professor',
            'email' => 'professor@mail.com',
            'password' => bcrypt($password = 'password'),
        ]);

        $professor->syncRoles(['professor']);

        

    }
}
