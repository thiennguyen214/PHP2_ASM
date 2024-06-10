<?php
const PATH_ROOT = __DIR__ . '/';

if (!function_exists('asset')) {
    function asset($path)
    {
        return $_ENV['BASE_URL'] . $path;
    }
}

if (!function_exists('url')) {
    function url($uri)
    {
        return $_ENV['BASE_URL'] . $uri;
    }
}
if (!function_exists('session')) {
    function session($name)
    {
        return $_SESSION[$name];
    }
}

if (!function_exists('auth_check')) {
    function auth_check()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . url('admin/'));
            exit;
        }
    }
}