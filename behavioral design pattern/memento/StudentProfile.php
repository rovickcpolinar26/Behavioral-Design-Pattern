<?php
class StudentProfile {
    public function __construct(
        public string $name, public string $program,
        public int $year, public string $email
    ) {}

    public function save(): StudentProfileMemento {
        return new StudentProfileMemento($this->name, $this->program, $this->year, $this->email);
    }
    public function restore(StudentProfileMemento $m): void {
        $this->name = $m->name; $this->program = $m->program;
        $this->year = $m->year; $this->email = $m->email;
    }
    public function show(string $title): void {
        echo "$title\n";
        echo "Name: {$this->name}\nProgram: {$this->program}\nYear: {$this->year}\nEmail: {$this->email}\n";
    }
}
