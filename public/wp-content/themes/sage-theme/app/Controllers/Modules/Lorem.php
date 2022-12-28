<?php

namespace App\Controllers\Modules;

class Lorem
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
