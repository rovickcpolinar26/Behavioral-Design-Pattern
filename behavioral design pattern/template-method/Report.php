<?php
abstract class Report {
    // The template method: the order of the steps never changes
    public function generateReport(): void {
        $this->header();
        $data = $this->retrieveData();
        $this->formatData($data);
        $this->footer();
    }

    protected function header(): void {
        echo "========================\n" . $this->title() . "\n========================\n";
    }
    protected function footer(): void {
        echo "========================\nEND OF REPORT\n========================\n\n";
    }

    abstract protected function title(): string;
    abstract protected function retrieveData(): array;
    abstract protected function formatData(array $data): void;
}
