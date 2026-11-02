<?php

class WeightedAverageStrategy implements GradeStrategy {
    public function __construct(private array $weights = [0.25, 0.75]) {}
    public function calculate(array $g): float {
        $total = 0;
        foreach ($g as $i => $score) { $total += $score * $this->weights[$i]; }
        return $total;
    }
    public function name(): string { return "Weighted Average"; }
}
