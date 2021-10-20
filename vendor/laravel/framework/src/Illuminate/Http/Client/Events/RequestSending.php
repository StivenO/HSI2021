<?php

namespace Illuminate\Http\Client\Events;

use Illuminate\Http\Client\Request;

class RequestSending
{
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Client\Request
     */
    public $request;

    /**
     * Create a new event instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Client\Request  $request
=======
     * @param  \Illuminate\Http\Client\Request $request
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
