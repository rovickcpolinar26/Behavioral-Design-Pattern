<?php
class DropSubjectCommand implements Command {
    public function __construct(private StudentSystem $s) {}
    public function execute(): void { $this->s->dropSubject(); }
    public function undo(): void { $this->s->restoreSubject(); }
    public function name(): string { return "Drop Subject"; }
}
