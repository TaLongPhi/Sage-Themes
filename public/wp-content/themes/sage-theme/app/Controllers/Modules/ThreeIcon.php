<?php

namespace App\Controllers\Modules;

class ThreeIcon
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
