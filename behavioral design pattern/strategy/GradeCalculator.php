<?php
class GradeCalculator {
    public function __construct(private GradeStrategy $strategy) {}
    public function setStrategy(GradeStrategy $s): void { $this->strategy = $s; }
    public function show(array $grades): void {
        echo "Strategy: " . $this->strategy->name() . "\n";
        echo "Result: " . number_format($this->strategy->calculate($grades), 2) . "\n\n";
    }
}
