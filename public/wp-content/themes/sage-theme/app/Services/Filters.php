<?php

namespace App\Services;

trait Filters
{
    public static function filterDemo($input)
    {
        //code
        $data =(object) $input;
        include \App\template_path(
            \App\locate_template('partials/filters/demo-item.blade.php', $data)
        );
    }
}
