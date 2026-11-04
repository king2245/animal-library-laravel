<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovelSeeder extends Seeder
{
    public function run(): void
    {
        $file = database_path('data/novels.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach (array_slice($lines, 1) as $line) {
            $data = explode("\t", $line);

            DB::table('novels')->insert([
                'id' => $data[0],
                'pyear' => $data[1],
                'title' => $data[2],
                'publisher' => $data[3],
            ]);
        }
    }
}