<?php
class Student implements Element {
    public function __construct(public string $name, public string $program) {}
    public function accept(Visitor $v): void { $v->visitStudent($this); }
}
