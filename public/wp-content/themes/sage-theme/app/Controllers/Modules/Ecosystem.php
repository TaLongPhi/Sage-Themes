<?php

namespace App\Controllers\Modules;

class Ecosystem
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
