<?php

namespace App\Controllers\Modules;

class CaoNhatTruong
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
