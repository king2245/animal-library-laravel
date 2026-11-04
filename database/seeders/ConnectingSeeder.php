<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConnectingSeeder extends Seeder
{
    public function run(): void
    {
        $file = database_path('data/connecting.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach (array_slice($lines, 1) as $line) {
            $data = explode("\t", trim($line));

            DB::table('connecting')->insert([
                'animalid' => $data[0],
                'novelid' => $data[1],
            ]);
        }
    }
}