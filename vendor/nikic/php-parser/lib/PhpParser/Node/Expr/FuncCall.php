<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node;
use PhpParser\Node\Expr;

<<<<<<< HEAD
class FuncCall extends CallLike
{
    /** @var Node\Name|Expr Function name */
    public $name;
    /** @var array<Node\Arg|Node\VariadicPlaceholder> Arguments */
=======
class FuncCall extends Expr
{
    /** @var Node\Name|Expr Function name */
    public $name;
    /** @var Node\Arg[] Arguments */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public $args;

    /**
     * Constructs a function call node.
     *
<<<<<<< HEAD
     * @param Node\Name|Expr                           $name       Function name
     * @param array<Node\Arg|Node\VariadicPlaceholder> $args       Arguments
     * @param array                                    $attributes Additional attributes
=======
     * @param Node\Name|Expr $name       Function name
     * @param Node\Arg[]     $args       Arguments
     * @param array          $attributes Additional attributes
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    public function __construct($name, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = $name;
        $this->args = $args;
    }

    public function getSubNodeNames() : array {
        return ['name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_FuncCall';
    }
<<<<<<< HEAD

    public function getRawArgs(): array {
        return $this->args;
    }
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
}
