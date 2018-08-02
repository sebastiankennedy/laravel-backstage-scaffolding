<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(Admin::TABLE)->insert([
            'account' => 'admin',
            'password' => bcrypt('123456'),
            'phone' => '15089940511',
            'email' => 'admin@laravel-tutorial.local',
            'name' => '麦浚龙',
            'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlqDPXyHFAikb1l1RJapqnp7SzrdoMCkCn373OE3-cAJWhjHzH',
        ]);
    }
}
