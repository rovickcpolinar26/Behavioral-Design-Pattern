<?php
class OrExpression implements Expression {
    public function __construct(private Expression $a, private Expression $b) {}
    public function interpret(StudentContext $c): bool { return $this->a->interpret($c) || $this->b->interpret($c); }
}
