<?php
class ReportVisitor implements Visitor {
    public function visitStudent(Student $s): void { echo "Student report generated.\n"; }
    public function visitFaculty(Faculty $f): void { echo "Faculty report generated.\n"; }
    public function visitAlumni(Alumni $a): void { echo "Alumni report generated.\n"; }
}
