<?php

namespace Hey\Pro\Commons;

const PATH_ASSET = __DIR__ . '/assets/';

class Helper
{
    public static function debug($data)
    {
        echo '<pre>';

        print_r($data);

        die;
    }

}