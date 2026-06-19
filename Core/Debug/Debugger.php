<?php

namespace Core\Debug;

class Debugger
{
    static function dd(): void
    {
        var_dump(func_get_args());

        exit;
    }
}
