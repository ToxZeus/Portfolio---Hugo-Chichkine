<?php
class Translation {
    private static $translations = [];
    
    public static function load($lang) {
        $langFile = __DIR__ . '/../lang/' . $lang . '.json';
        if (file_exists($langFile)) {
            self::$translations = json_decode(file_get_contents($langFile), true);
            $_SESSION['lang'] = $lang;
        }
    }
    
    public static function get($key) {
        return self::$translations[$key] ?? $key;
    }
    
    public static function getCurrentLang() {
        return $_SESSION['lang'] ?? DEFAULT_LANG;
    }
}