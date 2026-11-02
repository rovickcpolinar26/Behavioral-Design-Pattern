<?php
class StudentCollection implements IteratorAggregate {
    private array $students = [];   // private: the client cannot touch it
    public function add(Student $s): void { $this->students[] = $s; }
    public function getIterator(): Iterator { return new StudentIterator($this->students); }
}
