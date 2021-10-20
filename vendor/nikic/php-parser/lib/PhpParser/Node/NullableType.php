<?php declare(strict_types=1);

namespace PhpParser\Node;

<<<<<<< HEAD
class NullableType extends ComplexType
=======
use PhpParser\NodeAbstract;

class NullableType extends NodeAbstract
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
{
    /** @var Identifier|Name Type */
    public $type;

    /**
     * Constructs a nullable type (wrapping another type).
     *
     * @param string|Identifier|Name $type       Type
     * @param array                  $attributes Additional attributes
     */
    public function __construct($type, array $attributes = []) {
        $this->attributes = $attributes;
        $this->type = \is_string($type) ? new Identifier($type) : $type;
    }

    public function getSubNodeNames() : array {
        return ['type'];
    }
    
    public function getType() : string {
        return 'NullableType';
    }
}
