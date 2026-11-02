<?php
class StudentIterator implements Iterator {
    private int $pos = 0;
    public function __construct(private array $items) {}
    public function current(): mixed { return $this->items[$this->pos]; }
    public function key(): mixed { return $this->pos; }
    public function next(): void { $this->pos++; }
    public function rewind(): void { $this->pos = 0; }
    public function valid(): bool { return isset($this->items[$this->pos]); }
}
