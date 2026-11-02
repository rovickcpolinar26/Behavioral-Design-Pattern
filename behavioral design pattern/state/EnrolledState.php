<?php
class EnrolledState implements State {
    public function enroll(Student $s): void { echo "Student is already enrolled.\n"; }
    public function name(): string { return "Enrolled"; }
}
