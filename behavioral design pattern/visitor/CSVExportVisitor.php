<?php
class CSVExportVisitor implements Visitor {
    public function visitStudent(Student $s): void { echo "Student exported.\n"; }
    public function visitFaculty(Faculty $f): void { echo "Faculty exported.\n"; }
    public function visitAlumni(Alumni $a): void { echo "Alumni exported.\n"; }
}
