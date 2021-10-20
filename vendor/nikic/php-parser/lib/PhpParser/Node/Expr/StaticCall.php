<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node;
<<<<<<< HEAD
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\VariadicPlaceholder;

class StaticCall extends CallLike
=======
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;

class StaticCall extends Expr
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
{
    /** @var Node\Name|Expr Class name */
    public $class;
    /** @var Identifier|Expr Method name */
    public $name;
<<<<<<< HEAD
    /** @var array<Arg|VariadicPlaceholder> Arguments */
=======
    /** @var Node\Arg[] Arguments */
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public $args;

    /**
     * Constructs a static method call node.
     *
<<<<<<< HEAD
     * @param Node\Name|Expr                 $class      Class name
     * @param string|Identifier|Expr         $name       Method name
     * @param array<Arg|VariadicPlaceholder> $args       Arguments
     * @param array                          $attributes Additional attributes
=======
     * @param Node\Name|Expr         $class      Class name
     * @param string|Identifier|Expr $name       Method name
     * @param Node\Arg[]             $args       Arguments
     * @param array                  $attributes Additional attributes
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
     */
    public function __construct($class, $name, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->args = $args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_StaticCall';
    }
<<<<<<< HEAD

    public function getRawArgs(): array {
        return $this->args;
    }
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
}
