<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 09:43:17
 */

$app = Yee\Yee::getInstance();

$app->map("/myAccount", "MyAccountController::___indexAction")->via("GET")->name("my.index");

