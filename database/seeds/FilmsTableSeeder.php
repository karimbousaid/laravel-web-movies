<?php

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/data.json';  
        $file = File::get($path);  
        $data = json_decode($file, true);  
        DB::table('films')->insert($data); 
    }
}
