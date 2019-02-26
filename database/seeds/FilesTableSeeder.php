<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo",
            'description' => "Descripción del archivo",
            'path' => "/example/file.xls",
        ]);
    }
}
