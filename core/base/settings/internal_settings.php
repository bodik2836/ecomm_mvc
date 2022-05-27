<?php

use core\base\exceptions\RouteException;

defined('VG_ACCESS') or die('Access denied.');

const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/views/';
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

/**
 * @throws \core\base\exceptions\RouteException
 */
function autoloadMainClasses($className) {
    $className = __DIR__ . '/../../../' . str_replace('\\', '/', $className);

    if (!@include_once $className . '.php') {
        throw new RouteException('No correct file name - ' . $className);
    }
}

spl_autoload_register('autoloadMainClasses');
