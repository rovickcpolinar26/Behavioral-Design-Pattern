<?php
class RegistrarHandler extends Handler {
    protected function canHandle(StudentRequest $r): bool {
        return in_array($r->type, ["Certificate of Enrollment", "Transcript of Records"]);
    }
    protected function name(): string { return "Registrar"; }
}
