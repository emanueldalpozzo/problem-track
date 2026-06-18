<?php

namespace Core\Debug;


class Debugger
{
    static function dd()
    {
        var_dump(func_get_args());

        exit;
    }
}
