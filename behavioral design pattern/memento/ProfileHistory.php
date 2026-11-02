<?php
class ProfileHistory {
    private array $stack = [];
    public function push(StudentProfileMemento $m): void { $this->stack[] = $m; }
    public function pop(): ?StudentProfileMemento { return array_pop($this->stack); }
}
