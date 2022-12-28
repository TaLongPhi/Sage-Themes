<?php

namespace App\Controllers\Modules;

class Test
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
