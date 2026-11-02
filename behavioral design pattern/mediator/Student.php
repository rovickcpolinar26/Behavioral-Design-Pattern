<?php
class Student {
    public function __construct(public string $name, private Mediator $chat) {
        $this->chat->addStudent($this);
    }
    public function send(string $message): void {
        echo "{$this->name}: $message\n";
        $this->chat->send($message, $this);   // goes through the mediator only
    }
    public function receive(string $message, string $from): void {
        echo "{$this->name} receives:\n$from: $message\n";
    }
}
