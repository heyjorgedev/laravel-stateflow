<?php

namespace HeyJorgeDev\LaravelStateflow\Transitions;

use HeyJorgeDev\LaravelStateflow\Transition;

class ManualTransition implements Transition
{
    /**
     * @param string $action
     * @param string|array<string> $from
     * @param string $to
     * @param \Closure|class-string|callable $closure
     */
    public function __construct(
        private string $action,
        private string|array $from,
        private string $to,
        private \Closure|string|array $closure,
    ) {
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}
