<?php

namespace Facade\Ignition\Facades;

<<<<<<< HEAD
use Facade\Ignition\Support\SentReports;
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
use Illuminate\Support\Facades\Facade;

/**
 * Class Flare.
 *
 * @method static void glow(string $name, string $messageLevel = \Facade\FlareClient\Enums\MessageLevels::INFO, array $metaData = [])
 * @method static void context($key, $value)
 * @method static void group(string $groupName, array $properties)
 *
 * @see \Facade\FlareClient\Flare
 */
class Flare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Facade\FlareClient\Flare::class;
    }
<<<<<<< HEAD

    public static function sentReports(): SentReports
    {
        return app(SentReports::class);
    }
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
}
