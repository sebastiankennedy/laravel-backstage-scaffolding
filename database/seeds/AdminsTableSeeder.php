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
        DB::table(Admin::$tableName)->insert([
            'account' => 'admin',
            'password' => bcrypt('123456'),
        ]);
    }
}
