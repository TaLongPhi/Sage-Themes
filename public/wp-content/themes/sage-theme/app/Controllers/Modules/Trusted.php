<?php

namespace App\Controllers\Modules;

class Trusted
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
