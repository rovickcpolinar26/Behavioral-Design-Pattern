<?php
interface State {
    public function enroll(Student $s): void;
    public function name(): string;
}
