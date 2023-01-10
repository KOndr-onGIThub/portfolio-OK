<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->updateOrInsert([
            'name' => 'HCMS',
        ], [
            'description' => 'Hot Call Management System',
            'content' => 'sem napiš něco o projektu. Co obsahuje atd..',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('projects')->updateOrInsert([
            'name' => 'Portfolio OK',
        ], [
            'description' => 'portfolio na kterém se právě nacházíte',
            'content' => 'sem napiš něco o projektu. Co obsahuje atd..',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
