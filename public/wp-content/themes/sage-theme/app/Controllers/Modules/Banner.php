<?php

namespace App\Controllers\Modules;

class Banner
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
