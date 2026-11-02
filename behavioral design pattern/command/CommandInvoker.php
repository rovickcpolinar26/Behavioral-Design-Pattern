<?php
// Invoker
class CommandInvoker {
    private array $history = [];

    public function run(Command $c): void {
        echo "Executing: " . $c->name() . "\n";
        $c->execute();
        $this->history[] = $c;
    }
    public function undoLast(): void {
        $c = array_pop($this->history);
        if (!$c) { echo "Nothing to undo.\n"; return; }
        echo "Undo: " . $c->name() . "\n";
        $c->undo();
    }
}
