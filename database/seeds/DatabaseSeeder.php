<?php

use App\BankBalance;
use App\CashOut;
use App\Investment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(MemberSeeder::class);
        // $this->call(CashinSeeder::class);
        // factory(BankBalance::class,20)->create();
        factory(Investment::class,20)->create();
        // factory(CashOut::class,20)->create();
    }
}
