<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
              [
                'name' => 'ビジネスマナー',
              ],
              [
                'name' => '一般常識',
              ],
              [
                'name' => '就職・転職',
              ],
              [
                'name' => '法律',
              ],
              [
                'name' => 'IT',
              ],
              [
                'name' => '雑学',
              ],
            ]
            );
    }
}
