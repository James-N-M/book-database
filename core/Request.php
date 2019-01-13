<?php

class Request
{
    public static function uri()
    {
        // return the php url not the query string
        // without the leading and trailing '/'
        // /names?book=1/ becomes names
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }

    public static function requestType()
    {

    }
}