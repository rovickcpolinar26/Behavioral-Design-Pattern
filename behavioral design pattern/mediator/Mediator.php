<?php
interface Mediator {
    public function addStudent(Student $s): void;
    public function send(string $message, Student $from): void;
}
