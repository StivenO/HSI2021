<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value object representing Integer type
 *
 * @psalm-immutable
 */
<<<<<<< HEAD
class Integer implements Type
=======
final class Integer implements Type
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    {
        return 'int';
    }
}
