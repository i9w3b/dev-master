<?php

namespace I9w3b\DevMaster;

use Illuminate\Support\Facades\Facade;

class DevMasterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'devmaster';
    }
}
