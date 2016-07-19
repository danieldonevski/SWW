<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 08:21:25
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "activationController::___activationAction")->via("GET")->name("activation.index");

