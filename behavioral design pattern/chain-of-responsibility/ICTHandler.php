<?php
class ICTHandler extends Handler {
    protected function canHandle(StudentRequest $r): bool { return $r->type === "Student ID Concern"; }
    protected function name(): string { return "ICT"; }
}
