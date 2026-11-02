<?php
class EnrollmentReport extends Report {
    protected function title(): string { return "ENROLLMENT REPORT"; }
    protected function retrieveData(): array {
        return ["BSIT" => 120, "BSCS" => 80];
    }
    protected function formatData(array $d): void {
        foreach ($d as $program => $count) { echo "$program: $count students enrolled\n"; }
    }
}
