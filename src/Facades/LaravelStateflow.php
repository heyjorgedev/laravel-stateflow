<?php

namespace HeyJorgeDev\LaravelStateflow\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HeyJorgeDev\LaravelStateflow\LaravelStateflow
 */
class LaravelStateflow extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HeyJorgeDev\LaravelStateflow\LaravelStateflow::class;
    }
}
