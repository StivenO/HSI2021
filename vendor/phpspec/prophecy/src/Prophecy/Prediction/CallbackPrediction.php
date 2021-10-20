<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prediction;

use Prophecy\Call\Call;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Exception\InvalidArgumentException;
use Closure;
<<<<<<< HEAD
use ReflectionFunction;
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418

/**
 * Callback prediction.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CallbackPrediction implements PredictionInterface
{
    private $callback;

    /**
     * Initializes callback prediction.
     *
     * @param callable $callback Custom callback
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function __construct($callback)
    {
        if (!is_callable($callback)) {
            throw new InvalidArgumentException(sprintf(
                'Callable expected as an argument to CallbackPrediction, but got %s.',
                gettype($callback)
            ));
        }

        $this->callback = $callback;
    }

    /**
     * Executes preset callback.
     *
     * @param Call[]         $calls
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     */
    public function check(array $calls, ObjectProphecy $object, MethodProphecy $method)
    {
        $callback = $this->callback;

<<<<<<< HEAD
        if ($callback instanceof Closure && method_exists('Closure', 'bind') && (new ReflectionFunction($callback))->getClosureThis() !== null) {
=======
        if ($callback instanceof Closure && method_exists('Closure', 'bind')) {
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
            $callback = Closure::bind($callback, $object);
        }

        call_user_func($callback, $calls, $object, $method);
    }
}
