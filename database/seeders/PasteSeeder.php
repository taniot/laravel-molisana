<?php

namespace Database\Seeders;

use App\Models\Pasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('pasta');

        // DB::truncate('pastas');
        DB::table('pastas')->truncate();

        foreach ($data as $pasta_db) {
            $pasta = new Pasta();

            $pasta->title = $pasta_db['titolo'];
            $pasta->type = $pasta_db['tipo'];
            $pasta->cooking_time = $pasta_db['cottura'];
            $pasta->weight = $pasta_db['peso'];
            $pasta->description = $pasta_db['descrizione'];
            $pasta->image = $pasta_db['src'];

            $pasta->save();
        }
    }
}
