<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('tbusers')->insert([
            'id'=>'1',
            'name'=>'sang',
            'password'=>bcrypt('sang123')
        ]);
    }
}
