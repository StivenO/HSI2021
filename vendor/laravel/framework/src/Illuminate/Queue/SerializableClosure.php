<?php

namespace Illuminate\Queue;

use Opis\Closure\SerializableClosure as OpisSerializableClosure;

<<<<<<< HEAD
/**
 * @deprecated This class will be removed in Laravel 9.
 */
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
class SerializableClosure extends OpisSerializableClosure
{
    use SerializesAndRestoresModelIdentifiers;

    /**
     * Transform the use variables before serialization.
     *
<<<<<<< HEAD
     * @param  array  $data
=======
     * @param  array  $data The Closure's use variables
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     * @return array
     */
    protected function transformUseVariables($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = $this->getSerializedPropertyValue($value);
        }

        return $data;
    }

    /**
     * Resolve the use variables after unserialization.
     *
<<<<<<< HEAD
     * @param  array  $data
=======
     * @param  array  $data The Closure's transformed use variables
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     * @return array
     */
    protected function resolveUseVariables($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = $this->getRestoredPropertyValue($value);
        }

        return $data;
    }
}
