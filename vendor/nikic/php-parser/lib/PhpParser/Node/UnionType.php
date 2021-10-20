<?php declare(strict_types=1);

namespace PhpParser\Node;

<<<<<<< HEAD
class UnionType extends ComplexType
=======
use PhpParser\NodeAbstract;

class UnionType extends NodeAbstract
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
{
    /** @var (Identifier|Name)[] Types */
    public $types;

    /**
     * Constructs a union type.
     *
     * @param (Identifier|Name)[] $types      Types
     * @param array               $attributes Additional attributes
     */
    public function __construct(array $types, array $attributes = []) {
        $this->attributes = $attributes;
        $this->types = $types;
    }

    public function getSubNodeNames() : array {
        return ['types'];
    }
    
    public function getType() : string {
        return 'UnionType';
    }
}
