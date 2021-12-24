<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert(
            [
                [
                    'name' => 'Basic',
                    'description' => Str::words(50),
                ],
                [
                    'name' => 'Premium',
                    'description' => Str::words(50),
                ]
            ]
        );
    }
}
