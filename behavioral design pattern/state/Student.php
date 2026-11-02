<?php
class Student {
    private State $state;
    public function __construct() { $this->state = new ApplicantState(); }
    public function setState(State $s): void { $this->state = $s; }
    public function enroll(): void {
        echo "Current State: " . $this->state->name() . "\n";
        echo "Action: Enroll\nResult:\n";
        $this->state->enroll($this);
    }
}
