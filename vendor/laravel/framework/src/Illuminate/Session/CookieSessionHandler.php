<?php

namespace Illuminate\Session;

use Illuminate\Contracts\Cookie\QueueingFactory as CookieJar;
use Illuminate\Support\InteractsWithTime;
use SessionHandlerInterface;
use Symfony\Component\HttpFoundation\Request;

class CookieSessionHandler implements SessionHandlerInterface
{
    use InteractsWithTime;

    /**
     * The cookie jar instance.
     *
     * @var \Illuminate\Contracts\Cookie\Factory
     */
    protected $cookie;

    /**
     * The request instance.
     *
     * @var \Symfony\Component\HttpFoundation\Request
     */
    protected $request;

    /**
     * The number of minutes the session should be valid.
     *
     * @var int
     */
    protected $minutes;

    /**
     * Create a new cookie driven handler instance.
     *
     * @param  \Illuminate\Contracts\Cookie\QueueingFactory  $cookie
     * @param  int  $minutes
     * @return void
     */
    public function __construct(CookieJar $cookie, $minutes)
    {
        $this->cookie = $cookie;
        $this->minutes = $minutes;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
=======
     */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function open($savePath, $sessionName)
    {
        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
=======
     */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return string|false
     */
    #[\ReturnTypeWillChange]
=======
     */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function read($sessionId)
    {
        $value = $this->request->cookies->get($sessionId) ?: '';

        if (! is_null($decoded = json_decode($value, true)) && is_array($decoded)) {
            if (isset($decoded['expires']) && $this->currentTime() <= $decoded['expires']) {
                return $decoded['data'];
            }
        }

        return '';
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
=======
     */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function write($sessionId, $data)
    {
        $this->cookie->queue($sessionId, json_encode([
            'data' => $data,
            'expires' => $this->availableAt($this->minutes * 60),
        ]), $this->minutes);

        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
=======
     */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function destroy($sessionId)
    {
        $this->cookie->queue($this->cookie->forget($sessionId));

        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return int|false
     */
    #[\ReturnTypeWillChange]
=======
     */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function gc($lifetime)
    {
        return true;
    }

    /**
     * Set the request instance.
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @return void
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
}
