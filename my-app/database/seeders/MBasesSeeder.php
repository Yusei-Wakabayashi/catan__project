<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class MBasesSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'm_bases';
        $this->filename = base_path().'/database/csv_DB/m_bases.csv';
    }

    public function run()
    {
        DB::disableQueryLog();

        DB::table($this->table)->truncate();
        
        parent::run();
    }
}

