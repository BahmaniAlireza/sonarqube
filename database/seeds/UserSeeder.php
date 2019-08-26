<?php

use Illuminate\Database\Seeder;
use \App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "محمد یراقی";
        $user->email = "yaraghi77@gmail.com";
        $user->password = '$2y$10$Qb1EWU37rb5WcwJDYvdbreJrJdjCi73tyF48hrivUcGsT7jifkC/G';
        $user->save();
    }
}
