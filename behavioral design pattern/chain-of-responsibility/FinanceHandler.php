<?php
class FinanceHandler extends Handler {
    protected function canHandle(StudentRequest $r): bool { return $r->type === "Tuition Payment"; }
    protected function name(): string { return "Finance"; }
}
