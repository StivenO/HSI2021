<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\Node;

interface FunctionLike extends Node
{
    /**
     * Whether to return by reference
     *
     * @return bool
     */
    public function returnsByRef() : bool;

    /**
     * List of parameters
     *
     * @return Param[]
     */
    public function getParams() : array;

    /**
     * Get the declared return type or null
     *
<<<<<<< HEAD
     * @return null|Identifier|Name|ComplexType
=======
     * @return null|Identifier|Name|NullableType|UnionType
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    public function getReturnType();

    /**
     * The function body
     *
     * @return Stmt[]|null
     */
    public function getStmts();

    /**
     * Get PHP attribute groups.
     *
     * @return AttributeGroup[]
     */
    public function getAttrGroups() : array;
}
