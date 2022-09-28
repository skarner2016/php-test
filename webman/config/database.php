<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver'      => 'mysql',
            'host'        => 'mysql',
            'port'        => 3306,
            'database'    => 'php-test',
            'username'    => 'root',
            'password'    => '123456',
            'unix_socket' => '',
            'charset'     => 'utf8mb4',
            'collation'   => 'utf8mb4_0900_ai_ci',
            'prefix'      => '',
            'strict'      => true,
            'engine'      => null,
        ],
    ],
];
