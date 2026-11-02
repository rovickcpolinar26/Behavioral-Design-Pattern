<?php
abstract class Handler {
    private ?Handler $next = null;

    public function setNext(Handler $next): Handler {
        $this->next = $next;
        return $next;
    }

    public function handle(StudentRequest $request): void {
        if ($this->canHandle($request)) {
            echo $this->name() . ": Processing {$request->type}" . PHP_EOL;
            return;
        }
        echo $this->name() . ": Cannot process request.\n";
        if ($this->next) {
            $this->next->handle($request);
        } else {
            echo "No office can process this request.\n";
        }
    }

    abstract protected function canHandle(StudentRequest $r): bool;
    abstract protected function name(): string;
}
