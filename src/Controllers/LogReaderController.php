<?php

namespace Kriss\LaravelLogReader\Controllers;

use Kriss\LogReader\LogReader;
use Kriss\LogReader\Traits\LogReaderControllerTrait;
use Symfony\Component\HttpFoundation\Request;

class LogReaderController
{
    use LogReaderControllerTrait;

    protected function getLogReader(): LogReader
    {
        return app('log-reader');
    }

    protected function getRequest(): Request
    {
        return request();
    }

    protected function getBaseUrl(): string
    {
        return url(config('log-reader.route.prefix'));
    }
}
