<?php
class GraduatedState implements State {
    public function enroll(Student $s): void { echo "Graduated students can no longer enroll.\n"; }
    public function name(): string { return "Graduated"; }
}
