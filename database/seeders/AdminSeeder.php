<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Vuong Duc Hieu',
            'email'=>'vg.duchieu0602@gmail.com',
            'email_verified_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
            'password'=>bcrypt('Duchieu0602'),
            'phone'=>'0368701680',
            'role'=>'1',
        ]);
    }
}
