<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:test_insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $employee = new Employee();
        $employee->first_name = "Anna";
        $employee->save();

        return 0;
    }
}
