<?php
// Challenge: new strategy, GradeCalculator is NOT modified
class TransmutedGradeStrategy implements GradeStrategy {
    public function calculate(array $g): float {
        $avg = array_sum($g) / count($g);
        if ($avg >= 97) return 1.00;
        if ($avg >= 94) return 1.25;
        if ($avg >= 91) return 1.50;
        if ($avg >= 88) return 1.75;
        if ($avg >= 85) return 2.00;
        if ($avg >= 80) return 2.50;
        if ($avg >= 75) return 3.00;
        return 5.00;
    }
    public function name(): string { return "Transmuted Grade"; }
}
