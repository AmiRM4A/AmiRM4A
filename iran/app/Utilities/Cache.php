<?php

namespace app\Utilities;

class Cache
{
    public static $cache_file;
    protected static $cache_enabled = CACHE_ENABLED;
    const EXPIRE_TIME = 3600;

    public static function init()
    {
        self::$cache_file = CACHE_DIR . md5($_SERVER['REQUEST_URI']) . '.json';
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            self::$cache_enabled = 0;
        }
    }

    public static function start()
    {
        self::init();
        if (!self::$cache_enabled) {
            return;
        }
        if (file_exists(self::$cache_file) && (time() - self::EXPIRE_TIME) < filemtime(self::$cache_file)) {
            Response::setHeaders('200');
            readfile(self::$cache_file);
            exit;
        }
        ob_start();
    }

    public static function end()
    {
        if (!self::$cache_enabled) {
            return;
        }
        $cached_file = fopen(self::$cache_file, 'w');
        fwrite($cached_file, ob_get_contents());
        fclose($cached_file);
        ob_end_flush();
    }

    public static function flush()
    {
        $files = glob(CACHE_DIR . '*');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
    }
}