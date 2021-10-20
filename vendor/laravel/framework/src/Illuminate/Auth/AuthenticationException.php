<?php

namespace Illuminate\Auth;

use Exception;

class AuthenticationException extends Exception
{
    /**
     * All of the guards that were checked.
     *
     * @var array
     */
    protected $guards;

    /**
     * The path the user should be redirected to.
     *
<<<<<<< HEAD
     * @var string|null
=======
     * @var string
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    protected $redirectTo;

    /**
     * Create a new authentication exception.
     *
     * @param  string  $message
     * @param  array  $guards
     * @param  string|null  $redirectTo
     * @return void
     */
    public function __construct($message = 'Unauthenticated.', array $guards = [], $redirectTo = null)
    {
        parent::__construct($message);

        $this->guards = $guards;
        $this->redirectTo = $redirectTo;
    }

    /**
     * Get the guards that were checked.
     *
     * @return array
     */
    public function guards()
    {
        return $this->guards;
    }

    /**
     * Get the path the user should be redirected to.
     *
<<<<<<< HEAD
     * @return string|null
=======
     * @return string
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    public function redirectTo()
    {
        return $this->redirectTo;
    }
}
