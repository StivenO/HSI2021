<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link https://phpdoc.org
 */

namespace phpDocumentor\Reflection\PseudoTypes;

use phpDocumentor\Reflection\PseudoType;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\Boolean;
<<<<<<< HEAD

=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
use function class_alias;

/**
 * Value Object representing the PseudoType 'False', which is a Boolean type.
 *
 * @psalm-immutable
 */
final class True_ extends Boolean implements PseudoType
{
<<<<<<< HEAD
    public function underlyingType(): Type
=======
    public function underlyingType() : Type
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    {
        return new Boolean();
    }

<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    {
        return 'true';
    }
}

class_alias('\phpDocumentor\Reflection\PseudoTypes\True_', 'phpDocumentor\Reflection\Types\True_', false);
