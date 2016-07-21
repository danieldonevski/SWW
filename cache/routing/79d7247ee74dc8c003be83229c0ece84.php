<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 10:47:05
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___ajaxLogin")->via("POST")->name("ajaxlogin.index");
$app->map("/ajax/UpdateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("updatemyaccount.index");

