<?php

namespace Kriss\LaravelLogReader\Helper;

class LogReaderHelper
{
    /**
     * 加载路由
     */
    public static function requireRoute()
    {
        require __DIR__ . '/../../routes/web.php';
    }
}
