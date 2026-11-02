<?php
class StudentAffairsHandler extends Handler {
    protected function canHandle(StudentRequest $r): bool { return $r->type === "Good Moral Certificate"; }
    protected function name(): string { return "Student Affairs"; }
}
