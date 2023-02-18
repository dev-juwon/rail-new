<?php
declare(strict_types=1);

namespace App\Services\Alert\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return App\Services\Alert\Alert::class;
    }
}
