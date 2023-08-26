<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'COM',
                'remark' => 1
            ],
            [
                'name' => 'CIVIL',
                'remark' => 1
            ],
            [
                'name' => 'BBA',
                'remark' => 1
            ],
            [
                'name' => 'BCA',
                'remark' => 1
            ],
            [
                'name' => 'WCOM',
                'remark' => 2
            ],
            [
                'name' => 'WCIVIL',
                'remark' => 2
            ],
            [
                'name' => 'WBBA',
                'remark' => 2
            ],
            [
                'name' => 'WBCA',
                'remark' => 2
            ],
            [
                'name' => 'WITHHELD',
                'remark' => 3
            ],
            [
                'name' => 'SCOM',
                'remark' => 4
            ],
        ]);
    }
}
