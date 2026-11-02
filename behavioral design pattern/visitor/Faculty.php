<?php
class Faculty implements Element {
    public function __construct(public string $name, public string $department) {}
    public function accept(Visitor $v): void { $v->visitFaculty($this); }
}
