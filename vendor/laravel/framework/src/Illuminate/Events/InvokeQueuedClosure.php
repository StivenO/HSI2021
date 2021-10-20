<?php

namespace Illuminate\Events;

class InvokeQueuedClosure
{
    /**
     * Handle the event.
     *
<<<<<<< HEAD
     * @param  \Laravel\SerializableClosure\SerializableClosure  $closure
=======
     * @param  \Illuminate\Queue\SerializableClosure  $closure
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     * @param  array  $arguments
     * @return void
     */
    public function handle($closure, array $arguments)
    {
        call_user_func($closure->getClosure(), ...$arguments);
    }

    /**
     * Handle a job failure.
     *
<<<<<<< HEAD
     * @param  \Laravel\SerializableClosure\SerializableClosure  $closure
=======
     * @param  \Illuminate\Queue\SerializableClosure  $closure
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     * @param  array  $arguments
     * @param  array  $catchCallbacks
     * @param  \Throwable  $exception
     * @return void
     */
    public function failed($closure, array $arguments, array $catchCallbacks, $exception)
    {
        $arguments[] = $exception;

        collect($catchCallbacks)->each->__invoke(...$arguments);
    }
}
