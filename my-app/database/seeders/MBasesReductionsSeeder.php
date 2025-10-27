<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class MBasesReductionsSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'm_bases_reductions';
        $this->filename = base_path().'/database/csv_DB/m_bases_reductions.csv';
    }

    public function run()
    {
        DB::disableQueryLog();

        DB::table($this->table)->truncate();
        
        parent::run();
    }
}


