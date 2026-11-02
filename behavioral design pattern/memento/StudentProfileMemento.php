<?php
class StudentProfileMemento {
    public function __construct(
        public readonly string $name,
        public readonly string $program,
        public readonly int $year,
        public readonly string $email
    ) {}
}
