<?php

/*
 * * azure project presents:
                                          _
                                         | |
 __,   __          ,_    _             _ | |
/  |  / / _|   |  /  |  |/    |  |  |_|/ |/ \_
\_/|_/ /_/  \_/|_/   |_/|__/   \/ \/  |__/\_/
        /|
        \|
				azure web
				version: 1.0a
				azure team
 * * be carefully.
 */

namespace Azure\Interfaces;

/**
 * Interface Model
 * @package Azure\Interfaces
 *
 */
interface Model
{
    /**
     * @param $name
     * @return mixed
     */
    function __get($name);

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    function __set($name, $value);

    /**
     * destruct xit
     */
    function __destruct();
}