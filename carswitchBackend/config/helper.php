<?php


use Illuminate\Support\Facades\App;


if (!function_exists('public_path')) {
    /**
     * Return the path to public dir
     *
     * @param null $path
     *
     * @return string
     */
    function public_path($path = null)
    {
        return rtrim(app()->basePath('public/' . $path), '/');
    }
}

if (!function_exists('lumen_symlink')) {
    /**
     * Create a symlink 
     *
     * @param  String $from
     * @param  String $to
     * @return string
     */
    function lumen_symlink(String $from = 'app/public', String $to = 'storage')
    {
        App::make('files')->link(storage_path($from), public_path($to));
    }
}
