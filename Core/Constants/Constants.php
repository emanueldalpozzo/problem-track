<?php

namespace Core\Constants;

class Constants
{
    public static function rootPath(): StringPath
    {

        return new StringPath(dirname(__DIR__, 2));
    }

    public static function databasePath(): StringPath
    {
        return self::rootPath()->join('/database');
    }
}
