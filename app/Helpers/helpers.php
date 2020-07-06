<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

function newStd($array = [])
{
    $std = new \stdClass();
    foreach ($array as $key => $value) {
        $std->$key = $value;
    }
    return $std;
}

function storageImage($file, $default = '')
{
    if (!empty($file)) {
        return str_replace('\\', '/', Storage::disk('public')->url($file));
    }

    return $default;
}

// retrieve image from the "uploads" directory outside the
// to use we need to change disk from "public" to "local" in the repositories
function localImage($file, $default= '')
{
    if (!empty($file)) {
        return Str::of(Storage::disk('local')->url($file))->replace('storage', 'uploads');
    }

    return $default;
}

function toTitle($string='')
{
    return Str::of($string)->replace('_', ' ')->ucfirst();
}

function toDesc($string='')
{
    if (strlen($string) > 70)
        return Str::of($string)->substr(0, strpos($string, ' ', 70))->append(' ...');
    return $string;
}

function toDescEditor($string='')
{
    if (strlen($string) > 70)
        return Str::of($string)->substr(0, strpos($string, '>', 70))->append(' ...');
    return $string;
}
