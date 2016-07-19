<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 11:39:01
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LoginController::___indexAction")->via("GET")->name("login.index");
$app->map("/login2", "LoginController::___postAction")->via("POST")->name("post.index");

