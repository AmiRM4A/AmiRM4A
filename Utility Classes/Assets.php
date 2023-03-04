<?php
class Assets
{
    public static $assets = [];
    public static $type_loaded = [];
    private const FOLDER = 'C:/xampp/htdocs/Php/Utility Classes/assets/';
    public const ASSETS_DEFULAT_VER = '?v=1.0';
    public static function add(string $type, string $file, string | null $path = null, string | null $version = null, string | array | null $dependencies = null)
    {
        $type = strtolower($type);
        if (is_null($path)) {
            $path = self::FOLDER . $type;
        }
        static::$assets[$type][$file] = [
            'type' => $type,
            'file' => str_replace(['\\', '/'], '-', $file),
            'path' => "$path/$file.$type",
            'version' => $version,
            'dependencies' => (array) $dependencies,
            'is_loaded' => false,
        ];
        if (isset(static::$type_loaded[$type])) {
            static::dispatch($type, $file);
        }
        return true;
    }
    public static function dispatch($type, $file = null)
    {
        $type = strtolower($type);
        if (isset(static::$type_loaded[$type]) && is_null($file)) {
            echo 'This extension has been executed before...';
            return false;
        }
        if (!isset(static::$assets[$type])) {
            echo 'Invalid file type...';
            return false;
        }
        $assets = [];
        if (is_null($file)) {
            $assets = static::$assets[$type];
        } else {
            $assets = array_flip((array) $file);
        }
        foreach ($assets as $file => $data) {
            if (!isset(static::$assets[$type][$file]) || !file_exists(self::FOLDER . "$type/$file.$type")) {
                continue;
            }
            $data = static::$assets[$type][$file];
            if (!empty($data['dependencies'])) {
                static::dispatch($type, $data['dependencies']);
            }
            if (static::$assets[$type][$file]['is_loaded'] == false) {
                if ($type === 'css') {
                    echo "<link rel='stylesheet' href='$data[path]$data[version]'>" . PHP_EOL;
                } elseif ($type === 'js') {
                    echo "<script src='$data[path]$data[version]'></script>" . PHP_EOL;
                }
                static::$assets[$type][$file]['is_loaded'] = true;
            }
        }
        static::$type_loaded[$type] = true;
        return true;
    }
}
// Assets::add('css', 'style', '1.0.0', ['main']);
// print_r(Assets::$assets);
// Assets::dispatch('css', 'text');
// Assets::dispatch('js');
// Assets::dispatch('css', 'style');
// print_r(Assets::$type_loaded);

// Assets::add('js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js', '6.3.0');

Assets::add('css', 'style');
Assets::add('js', 'jquery-min', 'https://code.jqueryv6.com');
Assets::add('css', 'main', 'C:/xampp/htdocs/Php/Utility Classes/assets');

print_r(Assets::$assets);
Assets::dispatch('css');
Assets::dispatch('js');