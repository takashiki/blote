<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

/**
 * Created by PhpStorm.
 * User: zhangzhoufei
 * Date: 2018/8/30
 * Time: 20:29
 */

function cix($path, $manifestDirectory = '')
{
    $str = mix($path, $manifestDirectory);

    if (!App::environment('prod')) {
        return $str;
    }

    if (Str::startsWith($str, ['//', 'http://', 'https://'])) {
        return $str;
    }

    return new HtmlString(env('COSV5_CDN') . '/public' . $str);
}