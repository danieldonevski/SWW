<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 08:04:04
 */

$app = Yee\Yee::getInstance();

$app->map("/email", "EmailController::___indexAction")->via("GET")->name("email.index");

