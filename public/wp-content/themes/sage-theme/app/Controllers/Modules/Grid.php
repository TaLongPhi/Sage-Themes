<?php

namespace App\Controllers\Modules;

class Grid
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
