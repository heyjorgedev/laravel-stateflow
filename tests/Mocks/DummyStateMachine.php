<?php

namespace HeyJorgeDev\LaravelStateflow\Tests\Mocks;

use HeyJorgeDev\LaravelStateflow\StateMachine;
use HeyJorgeDev\LaravelStateflow\Transitions\ManualTransition;

class DummyStateMachine extends StateMachine
{
    public function initialState(): string
    {
        return 'off';
    }

    public function states(): array
    {
        return [
            'off',
            'on',
        ];
    }

    public function transitions(): array
    {
        return [
            new ManualTransition('turnOn', 'off', 'on', function () {
                // Do something inline
            }),
            new ManualTransition('turnOff', 'on', 'off', [$this, 'exampleTurnOff']),
        ];
    }

    public function exampleTurnOff() {
        // Do something as a method of something
    }
}
