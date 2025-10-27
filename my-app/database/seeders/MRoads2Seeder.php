<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class MRoads2Seeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'm_roads2';
        $this->filename = base_path().'/database/csv_DB/m_roads2.csv';
    }

    public function run()
    {
        DB::disableQueryLog();

        DB::table($this->table)->truncate();
        
        parent::run();
    }
}

