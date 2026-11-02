<?php
class StudentReport extends Report {
    protected function title(): string { return "STUDENT REPORT"; }
    protected function retrieveData(): array {
        return ["id" => "2026-001", "name" => "Juan Dela Cruz", "program" => "BSIT"];
    }
    protected function formatData(array $d): void {
        echo "Student ID: {$d['id']}\nName: {$d['name']}\nProgram: {$d['program']}\n";
    }
}
