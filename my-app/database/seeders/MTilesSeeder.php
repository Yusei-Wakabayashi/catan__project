<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class MTilesSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'm_tiles';
        $this->filename = base_path().'/database/csv_DB/m_tiles.csv';
    }
    public function run(): void
    {
        DB::disableQueryLog();

        DB::table($this->table)->truncate();
        
        parent::run();
    }
}
