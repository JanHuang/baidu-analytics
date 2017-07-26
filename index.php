<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2017
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

use Pagekit\Application;

return [
    'name' => 'baidu-analytics',

    'type' => 'extension',

    // called when Pagekit initializes the module
    'main' => function (Application $app) {
        echo "It's alive";
    }
];