<?php

namespace Passionator\LaravelPackageStart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Passionator\LaravelPackageStart\LaravelPackageStart
 */
class LaravelPackageStart extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Passionator\LaravelPackageStart\LaravelPackageStart::class;
    }
}
