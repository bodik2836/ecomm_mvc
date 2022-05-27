<?php

use core\base\exceptions\RouteException;
use core\base\controllers\RouteController;

const VG_ACCESS = true;

header('Content-Type:text/html;charset=utf-8');
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../core/base/settings/internal_settings.php';

try {
    RouteController::getInstance()->route();
} catch (RouteException $e) {
    exit($e->getMessage());
}
