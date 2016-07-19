<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 12:34:35
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___ajaxLogin")->via("POST")->name("ajaxlogin.index");

