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
    // 其他参数见 Kriss\LogReader\LogReader 属性

    // route
    'route' => [
        // 是否在 ServiceProvider 加载路由，设置为 false 之后可以使用 LogReaderHelper::requireRoute() 将路由加载在需要的地方
        'loadWithProvider' => true,
        // 路由前缀
        'prefix' => 'log-reader',
        // 路由命名空间
        'namespace' => '\\Kriss\\LaravelLogReader\\Controllers',
        // 路由中间件
        'middleware' => [],
    ],
];
