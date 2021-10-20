<?php

namespace Facade\Ignition\Middleware;

use Facade\FlareClient\Report;

class SetNotifierName
{
<<<<<<< HEAD
    public const NOTIFIER_NAME = 'Laravel Client';
=======
    const NOTIFIER_NAME = 'Laravel Client';
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418

    public function handle(Report $report, $next)
    {
        $report->notifierName(static::NOTIFIER_NAME);

        return $next($report);
    }
}
