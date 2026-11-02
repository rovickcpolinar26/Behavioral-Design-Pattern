<?php
interface Expression {
    public function interpret(StudentContext $c): bool;
}
