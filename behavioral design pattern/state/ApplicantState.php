<?php
class ApplicantState implements State {
    public function enroll(Student $s): void { echo "Student must complete pre-assessment first.\n"; }
    public function name(): string { return "Applicant"; }
}
