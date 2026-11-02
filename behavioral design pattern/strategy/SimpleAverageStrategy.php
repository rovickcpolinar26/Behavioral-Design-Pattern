<?php
class SimpleAverageStrategy implements GradeStrategy {
    public function calculate(array $g): float { return array_sum($g) / count($g); }
    public function name(): string { return "Simple Average"; }
}
