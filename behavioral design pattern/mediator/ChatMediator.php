<?php
class ChatMediator implements Mediator {
    private array $students = [];

    public function addStudent(Student $s): void { $this->students[] = $s; }

    public function send(string $message, Student $from): void {
        foreach ($this->students as $s) {
            if ($s !== $from) {
                $s->receive($message, $from->name);
            }
        }
    }
}
