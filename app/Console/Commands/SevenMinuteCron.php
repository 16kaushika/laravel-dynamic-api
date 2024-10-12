<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\DataHub;
use App\Models\MetaData;

class SevenMinuteCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seven-minute-cron';

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


        /* Find the existing record in DataHub */
        $existingRecord = DataHub::where('project', 'electronic-devices')
        ->where('module', 'inventory')
        ->first();

        if ($existingRecord) {
            $deletedData = MetaData::where('project_id', $existingRecord->id)->delete();
        }
    }
}
