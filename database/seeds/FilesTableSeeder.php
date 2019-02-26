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
            'title' => "Archivo excel de ejemplo 1",
            'description' => "Descripción del archivo 1",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 2 ",
            'description' => "Descripción del archivo 2",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 3",
            'description' => "Descripción del archivo 3",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 4",
            'description' => "Descripción del archivo 4",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 5",
            'description' => "Descripción del archivo 5",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 6",
            'description' => "Descripción del archivo 6",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 7",
            'description' => "Descripción del archivo 7",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 8",
            'description' => "Descripción del archivo 8",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 9",
            'description' => "Descripción del archivo 9",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 0",
            'description' => "Descripción del archivo 0",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 11",
            'description' => "Descripción del archivo 11",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 22",
            'description' => "Descripción del archivo 22",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 33",
            'description' => "Descripción del archivo 33",
            'path' => "/example/file.xls",
        ]);

        DB::table('files')->insert([
            'title' => "Archivo excel de ejemplo 44 ",
            'description' => "Descripción del archivo 44",
            'path' => "/example/file.xls",
        ]);
    }
}
