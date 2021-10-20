<?php

namespace GuzzleHttp\Promise;

/**
 * A promise that has been rejected.
 *
 * Thenning off of this promise will invoke the onRejected callback
 * immediately and ignore other callbacks.
 */
class RejectedPromise implements PromiseInterface
{
    private $reason;

<<<<<<< HEAD
    /** @var Promise|null */
    private $promise;

    /** @var callable|null */
    private $onRejected;

=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function __construct($reason)
    {
        if (is_object($reason) && method_exists($reason, 'then')) {
            throw new \InvalidArgumentException(
                'You cannot create a RejectedPromise with a promise.'
            );
        }

        $this->reason = $reason;
    }

    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
    ) {
        // If there's no onRejected callback then just return self.
        if (!$onRejected) {
            return $this;
        }

<<<<<<< HEAD
        $this->onRejected = $onRejected;

        $queue = Utils::queue();
        $reason = $this->reason;
        $p = $this->promise = new Promise([$queue, 'run']);
        $queue->add(static function () use ($p, $reason, $onRejected) {
            if (Is::pending($p)) {
                self::callHandler($p, $reason, $onRejected);
=======
        $queue = Utils::queue();
        $reason = $this->reason;
        $p = new Promise([$queue, 'run']);
        $queue->add(static function () use ($p, $reason, $onRejected) {
            if (Is::pending($p)) {
                try {
                    // Return a resolved promise if onRejected does not throw.
                    $p->resolve($onRejected($reason));
                } catch (\Throwable $e) {
                    // onRejected threw, so return a rejected promise.
                    $p->reject($e);
                } catch (\Exception $e) {
                    // onRejected threw, so return a rejected promise.
                    $p->reject($e);
                }
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
            }
        });

        return $p;
    }

    public function otherwise(callable $onRejected)
    {
        return $this->then(null, $onRejected);
    }

    public function wait($unwrap = true, $defaultDelivery = null)
    {
        if ($unwrap) {
            throw Create::exceptionFor($this->reason);
        }

<<<<<<< HEAD
        // Don't run the queue to avoid deadlocks, instead directly reject the promise.
        if ($this->promise && Is::pending($this->promise)) {
            self::callHandler($this->promise, $this->reason, $this->onRejected);
        }

=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
        return null;
    }

    public function getState()
    {
        return self::REJECTED;
    }

    public function resolve($value)
    {
        throw new \LogicException("Cannot resolve a rejected promise");
    }

    public function reject($reason)
    {
        if ($reason !== $this->reason) {
            throw new \LogicException("Cannot reject a rejected promise");
        }
    }

    public function cancel()
    {
        // pass
    }
<<<<<<< HEAD

    private static function callHandler(Promise $promise, $reason, callable $handler)
    {
        try {
            $promise->resolve($handler($reason));
        } catch (\Throwable $e) {
            $promise->reject($e);
        } catch (\Exception $e) {
            $promise->reject($e);
        }
    }
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
}
