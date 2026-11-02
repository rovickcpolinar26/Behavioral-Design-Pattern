<?php
class GradeSystem implements Subject {
    private array $observers = [];
    private float $grade = 0;

    public function attach(Observer $o): void { $this->observers[] = $o; }
    public function notify(): void {
        foreach ($this->observers as $o) { $o->update($this->grade); }
    }
    public function setGrade(float $grade): void {
        $this->grade = $grade;
        echo "Grade updated: " . number_format($grade, 2) . "\n";
        $this->notify();
    }
}
