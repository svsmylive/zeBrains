<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++)
            DB::table('news')->insert([
                'title' => Str::random(8),
                'preview_picture' => 'preview_' . rand(1, 5) . '.jpg',
                'preview_text' => Str::random(15),
                'is_active' => true,
                'content' => 'Nam gravida elit non massa congue, ac commodo ipsum mattis. Fusce erat magna, egestas vitae arcu non, posuere iaculis leo.',
            ]);
    }
}
