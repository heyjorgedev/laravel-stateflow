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
            ManualTransition::make('turnOn')
                ->from('off')
                ->to('on')
                ->action(function () {
                    // Inline logic
                }),
            ManualTransition::make('off')
                ->from('on')
                ->to('off')
                ->action([$this, 'exampleTurnOff']),
        ];
    }

    public function exampleTurnOff()
    {
        // Do something as a method of something
    }
}
