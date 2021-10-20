<?php

namespace Illuminate\Foundation\Console;

use Exception;
use Illuminate\Console\Command;
<<<<<<< HEAD
use Illuminate\Foundation\Events\MaintenanceModeDisabled;
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418

class UpCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bring the application out of maintenance mode';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            if (! is_file(storage_path('framework/down'))) {
                $this->comment('Application is already up.');

                return 0;
            }

            unlink(storage_path('framework/down'));

            if (is_file(storage_path('framework/maintenance.php'))) {
                unlink(storage_path('framework/maintenance.php'));
            }

<<<<<<< HEAD
            $this->laravel->get('events')->dispatch(MaintenanceModeDisabled::class);

=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
            $this->info('Application is now live.');
        } catch (Exception $e) {
            $this->error('Failed to disable maintenance mode.');

            $this->error($e->getMessage());

            return 1;
        }
    }
}
