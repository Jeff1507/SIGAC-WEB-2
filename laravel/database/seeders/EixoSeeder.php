<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EixoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => "INFORMAÇÃO E COMUNICAÇÃO"],
            ["nome" => "RECURSOS NATURAIS"],
            ["nome" => "CIÊNCIAS HUMANAS"],
        ];
        DB::table('eixos')->insert($data);
    }
}
