<?php
interface Visitor {
    public function visitStudent(Student $s): void;
    public function visitFaculty(Faculty $f): void;
    public function visitAlumni(Alumni $a): void;
}
