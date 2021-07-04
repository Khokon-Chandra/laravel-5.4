<?php

use Illuminate\Database\Seeder;
use App\CashIn;

class CashinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CashIn::class,10)->create();
    }
}


