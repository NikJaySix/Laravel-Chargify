<?php
namespace NikJaySix\LaravelChargify;

use Illuminate\Support\Facades\Facade;

class LaravelChargifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chargify';
    }
}