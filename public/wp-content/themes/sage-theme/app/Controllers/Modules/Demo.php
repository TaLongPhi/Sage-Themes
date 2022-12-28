<?php

namespace App\Controllers\Modules;

class Demo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'num1' => 1,
            'num2' => 1,
            'num3' => 1+1,
            'sub' => 'Một + một = hai'
            // 'title' => $module['title'],
            // 'desc' => $module['desc']
        ];
    }
}
