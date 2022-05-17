<?php
/**
 * @see \Kriss\LaravelLogReader\LogReaderServiceProvider
 * @see Kriss\LogReader\LogReader
 */
return [
    // 是否启用
    'enable' => env('LOG_READER_ENABLE', true),
    // 是否允许删除
    'deleteEnable' => env('LOG_READER_ENABLE_DELETE', true),
    // 日志根路径
    'logPath' => storage_path('logs'),
    // tail 查看时默认读取的行大小
    'tailDefaultLine' => env('LOG_READER_TAIL_DEFAULT', 200),
    // route
    'route' => [
        'prefix' => 'log-reader',
        'namespace' => '\\Kriss\\LaravelLogReader\\Controllers',
        'middleware' => [],
    ],
];
