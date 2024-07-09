<?php

namespace HeyJorgeDev\LaravelStateflow;

/**
 * State machine definition
 *
 * @template T
 */
abstract class StateMachine
{
    /**
     * Initial state of the state machine
     *
     * @return string|class-string<T>
     */
    abstract public function initialState(): string;

    /**
     * List of possible states
     *
     * @return array<string|class-string<T>>
     */
    abstract public function states(): array;

    /**
     * List of possible transitions
     */
    abstract public function transitions(): array;
}
