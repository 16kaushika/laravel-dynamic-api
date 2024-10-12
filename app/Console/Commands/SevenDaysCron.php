<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\DataHub;
use App\Models\MetaData;
use Carbon\Carbon;

class SevenDaysCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seven-days-cron';

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
        // Define the date 7 days ago
        $sevenDaysAgo = Carbon::now()->subDays(7);

        // Fetch all DataHub records older than 7 days
        $dataHubRecords = DataHub::where('created_at', '<', $sevenDaysAgo)
        ->where('project', 'electronic-devices')
        ->where('module', 'inventory')
        ->get();

        // Check if there are any records to delete
        if ($dataHubRecords->isEmpty()) {
            $this->info('No records older than 7 days found in DataHub.');
            return;
        }

        foreach ($dataHubRecords as $record) {
            // Delete related MetaData records for the current DataHub record
            $deletedMetaData = MetaData::where('project_id', $record->id)
            ->where('created_at', '<', $sevenDaysAgo)
            ->delete();

            // Delete the current DataHub record
            $record->delete();

            // Log the deleted record details
            $this->info('Deleted DataHub ID: ' . $record->id . ' and its related MetaData.');
        }

        $this->info('Successfully deleted all records older than 7 days from DataHub and MetaData.');
        
    }
}
