<?php

namespace App\Controllers\Modules;

class Footer
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
