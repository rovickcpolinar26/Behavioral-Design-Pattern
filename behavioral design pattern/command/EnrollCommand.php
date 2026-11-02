<?php
class EnrollCommand implements Command {
    public function __construct(private StudentSystem $s) {}
    public function execute(): void { $this->s->enroll(); }
    public function undo(): void { $this->s->unenroll(); }
    public function name(): string { return "Enroll Student"; }
}
