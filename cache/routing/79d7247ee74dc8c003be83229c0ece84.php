<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 09:05:25
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___ajaxLogin")->via("POST")->name("ajaxlogin.index");

