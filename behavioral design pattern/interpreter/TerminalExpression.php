<?php
class TerminalExpression implements Expression {
    public function __construct(private string $field, private string $value) {}
    public function interpret(StudentContext $c): bool {
        return ($c->data[$this->field] ?? null) == $this->value;
    }
}
