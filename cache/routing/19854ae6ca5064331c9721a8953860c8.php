<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 10:30:49
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___indexAction")->via("GET")->name("signup.index");
$app->map("/signup2", "SignupController::___postAction")->via("POST")->name("post.index");

