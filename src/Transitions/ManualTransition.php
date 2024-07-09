<?php

namespace HeyJorgeDev\LaravelStateflow\Transitions;

use HeyJorgeDev\LaravelStateflow\Transition;

class ManualTransition implements Transition
{
    public function __construct(string $name)
    {
    }

    public static function make(string $name): self
    {
        return new self($name);
    }

    public function from(string $state): self
    {
        return $this;
    }

    public function to(string $state): self
    {
        return $this;
    }

    public function action(callable|\Closure $action): self
    {
        return $this;
    }


    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}
