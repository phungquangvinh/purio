<?php

use \Illuminate\Support\Facades\Request;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

if (!function_exists('check_domain')) {
    function check_domain($domain)
    {
        return Request::server('HTTP_HOST') == $domain;
    }
}

if (!function_exists('set_cookie')) {
    function set_cookie($key, $value, $time = 10)
    {
        return response($value)->withCookie($key, $value, $time);
    }
}

if (!function_exists('validator')) {
    /**
     * Create a new Validator instance.
     *
     * @param  array $data
     * @param  array $rules
     * @param  array $messages
     * @param  array $customAttributes
     * @return \Illuminate\Contracts\Validation\Validator
     */
    function validator(array $data = [], array $rules = [], array $messages = [], array $customAttributes = [])
    {
        $factory = app(ValidationFactory::class);

        if (func_num_args() === 0) {
            return $factory;
        }

        return $factory->make($data, $rules, $messages, $customAttributes);
    }
}

if (!function_exists('check_selected')) {
    function check_selected($value, $value_compare, $type = 'select')
    {
        $str_response = '';
        switch ($type) {
            case 'select':
                $str_response = $value == $value_compare ? 'selected="selected"' : '';
                break;
            case 'radio':
            case 'checkbox':
                $str_response = $value == $value_compare ? 'checked="checked"' : '';
                break;
            default:
                break;
        }
        return $str_response;
    }
}


if (!function_exists('url_sync')) {
    function url_sync($path)
    {
        $path_new = '';
        if (!empty($path) && file_exists($path)) {
            $path_new = url($path) . '?v=' . fileatime($path);
        }
        return $path_new;
    }
}