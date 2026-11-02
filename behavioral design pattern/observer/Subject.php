<?php
interface Subject {
    public function attach(Observer $o): void;
    public function notify(): void;
}
