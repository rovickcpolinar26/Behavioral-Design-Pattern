<?php
class PreAssessedState implements State {
    public function enroll(Student $s): void {
        echo "Student successfully enrolled.\n";
        $s->setState(new EnrolledState());
    }
    public function name(): string { return "Pre-Assessed"; }
}
