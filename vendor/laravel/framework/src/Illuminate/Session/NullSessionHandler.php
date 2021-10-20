<?php

namespace Illuminate\Session;

use SessionHandlerInterface;

class NullSessionHandler implements SessionHandlerInterface
{
    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    #[\ReturnTypeWillChange]
    public function open($savePath, $sessionName)
    {
        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    #[\ReturnTypeWillChange]
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return string|false
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    #[\ReturnTypeWillChange]
    public function read($sessionId)
    {
        return '';
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    #[\ReturnTypeWillChange]
    public function write($sessionId, $data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    #[\ReturnTypeWillChange]
    public function destroy($sessionId)
    {
        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return int|false
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    #[\ReturnTypeWillChange]
    public function gc($lifetime)
    {
        return true;
    }
}
