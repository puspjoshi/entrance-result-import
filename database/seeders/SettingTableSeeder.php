<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'key' => 'pass_message',
                'value' => 'You have been declared successful in the Entrance Examination held on 5th and 6th Shrawan, 2080. You are required to take admission by 11 of Shrawan 2080 before 12:00PM. If not admitted, within the deadline, the vacant seats will be granted to the candidates in the waiting list.'
            ],
            [
                'key' => 'waiting_message',
                'value' => 'You have been in waiting list in the Entrance Examination held on 5th and 6th Shrawan, 2080. You are required to take admission by 11 of Shrawan 2080 before 12:00PM. If not admitted, within the deadline, the vacant seats will be granted to the candidates in the waiting list.'
            ],
            [
                'key' => 'fail_message',
                'value' => 'You have been Failed in the Entrance Examination held on 5th and 6th Shrawan, 2080. You are required to contact in college.'
            ],
            [
                'key' => 'withheld_message',
                'value' => 'You have been declared withheld in the Entrance Examination held on 5th and 6th Shrawan, 2080. You are required to contact to college.'
            ],
            [
                'key' => 'pagination_limit',
                'value' => 10
            ],
        ]);
    }
}
