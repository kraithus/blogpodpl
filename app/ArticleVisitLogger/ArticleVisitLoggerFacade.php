<?php

namespace App\ArticleVisitLogger;

use Illuminate\Support\Facades\Facade;

class ArticleVisitLoggerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'articlevisitlogger';
    }
}
