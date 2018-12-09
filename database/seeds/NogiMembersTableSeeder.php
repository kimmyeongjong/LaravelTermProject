<?php

use Illuminate\Database\Seeder;
use App\Nogi_member;
//이거 실행하면 테이블에 값 들어감!!!!
class NogiMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Nogi_member::create([
            'member'=>str_random(5),
            'team'=>4,
        ]);
    }
}
