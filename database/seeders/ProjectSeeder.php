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
            'description' => '
                Hot Call Management System
                <br>
                Jedná se o aplikaci kterou jsem naprogramoval jako zaměstnanec Toyoty na oddělení logistiky.
            ',

            'content' => '
                <h6>Hlavní funce:</h6>
                <br> 
                1. Na základě klíčového vstupu od uživatele (zadání čísla dílu) dohledat 
                detailní informace, které se ke vstupní hodnotě vztahují.
                <br>
                2. Na základě získaného detailu doplnit další údaje a záznam uložit. Záznam je možné později editovat.
                <br>
                3. Další část aplikace je používána na mobilních zařízeních dalších pracovníků, 
                kteří s informacemi dále pracují, doplňují je a editují tak záznamy v DB.
                <br>
                <h6>Použité technologie, nástroje a postupy:</h6>
                PHP, Laravel, JS, jQuery, PostgreSQL, Ajax, API, CSS, HTML, ...

            ',
            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('projects')->updateOrInsert([
            'name' => 'Portfolio OK',
        ], [
            'description' => '
                Portfolio na kterém se právě nacházíte.
                <br>
            ',

            'content' => '
                Hlavními motivy jsou pro mě získání a upevnění praxe v programování a mět co ukázat při hledání prvního developer jobu.
            ',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
