<?php

namespace LaravelLiberu\ControlPanelCommon\Contracts;

interface Action
{
    public function id(): string;

    public function handle(): array;

    public function label(): string;

    public function tooltip(): string;

    public function icon(): array;

    public function confirmation(): bool;

    public function order(): int;
}
