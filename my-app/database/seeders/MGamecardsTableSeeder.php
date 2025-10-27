<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class MGamecardsTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'm_gamecards';
        $this->filename = base_path().'/database/csv_DB/m_gamecards.csv';
    }

    public function run()
    {
        DB::disableQueryLog();

        DB::table($this->table)->truncate();
        
        parent::run();
    }
}

