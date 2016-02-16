<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // モック自動生成
        factory(App\Users::class, 26)->create();

        $faker = Faker\Factory::create('ja_JP');

        DB::table('users')->insert([
            'name'            => 'admin',
            'email'           => 'admin@gstaff.co.jp',
            'password'        => bcrypt('ABC12345'),
            'role'           => 'admin',
            'created_at'      => Carbon::today(),
            'updated_at'      => Carbon::today(),
            'remember_token'  => 'hogehoge',
        ]);
        DB::table('users')->insert([
            'name'            => 'editor',
            'email'           => 'editor@gstaff.co.jp',
            'password'        => bcrypt('ABC12345'),
            'role'            => 'editor',
            'created_at'      => Carbon::today(),
            'updated_at'      => Carbon::today(),
            'remember_token'  => 'hogehoge',
        ]);
        DB::table('users')->insert([
            'name'            => '清原',
            'email'           => 'kiyohara@gstaff.co.jp',
            'password'        => bcrypt('ABC12345'),
            'role'            => 'editor',
            'created_at'      => Carbon::today(),
            'updated_at'      => Carbon::today(),
            'remember_token'  => 'hogehoge',
        ]);
        DB::table('users')->insert([
            'name'            => 'ベッキー',
            'email'           => 'becky@gstaff.co.jp',
            'password'        => bcrypt('ABC12345'),
            'role'            => 'editor',
            'created_at'      => Carbon::today(),
            'updated_at'      => Carbon::today(),
            'remember_token'  => 'hogehoge',
        ]);

    }
}
