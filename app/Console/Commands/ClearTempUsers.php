<?php
namespace App\Console\Commands;

use App\Models\ParticipantModel; // example, adjust to your models
use App\Core\CommandInterface;

class ClearTempUsers implements CommandInterface
{
    public $signature = 'users:clear-temp {days=7}';
    public $description = 'Clear temporary users older than given days.';

    public function handle($arguments)
    {
        $days = (int)($arguments['days'] ?? 7);

        $count = ParticipantModel::where('is_temp', 1)
            ->where('created_at', '<', now()->subDays($days))
            ->delete();

        echo "Deleted {$count} temp users older than {$days} days.\n";
    }
}
