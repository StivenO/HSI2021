<?php

namespace Facade\Ignition\DumpRecorder;

use Symfony\Component\VarDumper\Cloner\VarCloner;

class DumpHandler
{
    /** @var \Facade\Ignition\DumpRecorder\DumpRecorder */
    protected $dumpRecorder;

    public function __construct(DumpRecorder $dumpRecorder)
    {
        $this->dumpRecorder = $dumpRecorder;
    }

    public function dump($value)
    {
<<<<<<< HEAD
        $data = (new VarCloner())->cloneVar($value);
=======
        $data = (new VarCloner)->cloneVar($value);
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418

        $this->dumpRecorder->record($data);
    }
}
