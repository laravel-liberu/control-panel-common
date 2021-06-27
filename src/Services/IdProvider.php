<?php

namespace LaravelEnso\ControlPanelCommon\Services;

use Illuminate\Support\Str;
use ReflectionClass;

abstract class IdProvider
{
    public function id(): string
    {
        return Str::camel((new ReflectionClass($this))->getShortName());
    }
}
