<?php
class GradeReport extends Report {
    protected function title(): string { return "GRADE REPORT"; }
    protected function retrieveData(): array {
        return ["Math" => 1.75, "Programming" => 1.25, "English" => 2.00];
    }
    protected function formatData(array $d): void {
        foreach ($d as $subject => $grade) { echo "$subject: " . number_format($grade, 2) . "\n"; }
    }
}
