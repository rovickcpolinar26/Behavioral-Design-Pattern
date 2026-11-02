<?php
class DroppedState implements State {
    public function enroll(Student $s): void { echo "Dropped students must re-apply.\n"; }
    public function name(): string { return "Dropped"; }
}
