<?php

namespace Illuminate\Console\Scheduling;

use Cron\CronExpression;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class ScheduleListCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'schedule:list {--timezone= : The timezone that times should be displayed in}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List the scheduled commands';

    /**
     * Execute the console command.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
<<<<<<< HEAD
     *
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     * @throws \Exception
     */
    public function handle(Schedule $schedule)
    {
        foreach ($schedule->events() as $event) {
            $rows[] = [
                $event->command,
                $event->expression,
                $event->description,
                (new CronExpression($event->expression))
                            ->getNextRunDate(Carbon::now()->setTimezone($event->timezone))
                            ->setTimezone($this->option('timezone', config('app.timezone')))
                            ->format('Y-m-d H:i:s P'),
            ];
        }

        $this->table([
            'Command',
            'Interval',
            'Description',
            'Next Due',
        ], $rows ?? []);
    }
}
