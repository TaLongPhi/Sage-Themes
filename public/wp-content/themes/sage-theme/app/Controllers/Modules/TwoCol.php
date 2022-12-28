<?php

namespace App\Controllers\Modules;

class TwoCol
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
