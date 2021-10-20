<?php

namespace Illuminate\Queue;

use Closure;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use ReflectionFunction;

class CallQueuedClosure implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The serializable Closure instance.
     *
<<<<<<< HEAD
     * @var \Laravel\SerializableClosure\SerializableClosure
=======
     * @var \Illuminate\Queue\SerializableClosure
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    public $closure;

    /**
     * The callbacks that should be executed on failure.
     *
     * @var array
     */
    public $failureCallbacks = [];

    /**
     * Indicate if the job should be deleted when models are missing.
     *
     * @var bool
     */
    public $deleteWhenMissingModels = true;

    /**
     * Create a new job instance.
     *
<<<<<<< HEAD
     * @param  \Laravel\SerializableClosure\SerializableClosure  $closure
     * @return void
     */
    public function __construct($closure)
=======
     * @param  \Illuminate\Queue\SerializableClosure  $closure
     * @return void
     */
    public function __construct(SerializableClosure $closure)
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    {
        $this->closure = $closure;
    }

    /**
     * Create a new job instance.
     *
     * @param  \Closure  $job
     * @return self
     */
    public static function create(Closure $job)
    {
<<<<<<< HEAD
        return new self(SerializableClosureFactory::make($job));
=======
        return new self(new SerializableClosure($job));
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    }

    /**
     * Execute the job.
     *
     * @param  \Illuminate\Contracts\Container\Container  $container
     * @return void
     */
    public function handle(Container $container)
    {
        $container->call($this->closure->getClosure(), ['job' => $this]);
    }

    /**
     * Add a callback to be executed if the job fails.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function onFailure($callback)
    {
        $this->failureCallbacks[] = $callback instanceof Closure
<<<<<<< HEAD
                        ? SerializableClosureFactory::make($callback)
=======
                        ? new SerializableClosure($callback)
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
                        : $callback;

        return $this;
    }

    /**
     * Handle a job failure.
     *
     * @param  \Throwable  $e
     * @return void
     */
    public function failed($e)
    {
        foreach ($this->failureCallbacks as $callback) {
<<<<<<< HEAD
            $callback($e);
=======
            call_user_func($callback instanceof SerializableClosure ? $callback->getClosure() : $callback, $e);
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
        }
    }

    /**
     * Get the display name for the queued job.
     *
     * @return string
     */
    public function displayName()
    {
        $reflection = new ReflectionFunction($this->closure->getClosure());

        return 'Closure ('.basename($reflection->getFileName()).':'.$reflection->getStartLine().')';
    }
}
