<?php
class StudentSystem {
    public function enroll(): void { echo "Student successfully enrolled.\n"; }
    public function unenroll(): void { echo "Enrollment cancelled.\n"; }
    public function dropSubject(): void { echo "Subject successfully dropped.\n"; }
    public function restoreSubject(): void { echo "Subject restored.\n"; }
    public function printRegistration(): void { echo "Registration form printed.\n"; }
    public function logout(): void { echo "Student logged out.\n"; }
}
