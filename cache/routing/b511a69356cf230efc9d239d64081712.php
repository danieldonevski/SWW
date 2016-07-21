<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 11:00:26
 */

$app = Yee\Yee::getInstance();

$app->map("/myAccount", "MyAccountController::___indexAction")->via("GET")->name("my.index");

