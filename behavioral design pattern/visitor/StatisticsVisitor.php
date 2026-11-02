<?php
class StatisticsVisitor implements Visitor {
    private int $students = 0, $faculty = 0, $alumni = 0;
    public function visitStudent(Student $s): void { $this->students++; echo "Student counted.\n"; }
    public function visitFaculty(Faculty $f): void { $this->faculty++; echo "Faculty counted.\n"; }
    public function visitAlumni(Alumni $a): void { $this->alumni++; echo "Alumni counted.\n"; }
    public function total(): int { return $this->students + $this->faculty + $this->alumni; }
}
