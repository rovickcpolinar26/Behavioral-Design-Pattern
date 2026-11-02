<?php
class PrintRegistrationCommand implements Command {
    public function __construct(private StudentSystem $s) {}
    public function execute(): void { $this->s->printRegistration(); }
    public function undo(): void { echo "Printing cannot be undone.\n"; }
    public function name(): string { return "Print Registration"; }
}
