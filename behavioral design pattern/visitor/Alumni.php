<?php
class Alumni implements Element {
    public function __construct(public string $name, public int $yearGraduated) {}
    public function accept(Visitor $v): void { $v->visitAlumni($this); }
}
