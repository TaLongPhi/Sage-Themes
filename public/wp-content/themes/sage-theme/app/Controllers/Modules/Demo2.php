<?php

namespace App\Controllers\Modules;

class Demo2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'num1' => 2,
            'num2' => 2,
            'num3' => 2+2,
            'sub' => 'hai + hai = bốn'
        ];
    }
}
