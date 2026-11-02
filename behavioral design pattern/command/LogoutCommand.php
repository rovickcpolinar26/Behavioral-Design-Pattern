<?php
class LogoutCommand implements Command {
    public function __construct(private StudentSystem $s) {}
    public function execute(): void { $this->s->logout(); }
    public function undo(): void { echo "Logout cannot be undone.\n"; }
    public function name(): string { return "Logout"; }
}
