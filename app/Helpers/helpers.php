<?php

namespace App\Helpers;

use Config\Session;

function getEnv(string $key, ?string $default = null): string
{
    return $_ENV[$key] ?? $default;
}

function setTitle(string $title)
{
    Session::set('title', $title);
}

function getTitle(): string
{
    // return Session::get('title') ?? 'Default Title';
    return getEnv('APP_NAME', 'App') . ' | ' . Session::get('title') ?? 'Default Title';
}