<?php

namespace App\Controllers\Modules;

class Connecting
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
