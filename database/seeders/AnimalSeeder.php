<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        $file = database_path('data/animals.txt');

        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach (array_slice($lines, 1) as $line) {
            $data = explode("\t", $line);

            DB::table('animals')->insert([
                'id' => $data[0],
                'aname' => $data[1],
                'species' => $data[2],
            ]);
        }
    }
}