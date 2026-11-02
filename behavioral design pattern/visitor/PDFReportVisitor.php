<?php
// Challenge: new operation, Student/Faculty/Alumni classes are NOT modified
class PDFReportVisitor implements Visitor {
    public function visitStudent(Student $s): void { echo "Student PDF report created.\n"; }
    public function visitFaculty(Faculty $f): void { echo "Faculty PDF report created.\n"; }
    public function visitAlumni(Alumni $a): void { echo "Alumni PDF report created.\n"; }
}
