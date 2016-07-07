<?php

use Symfony\Component\HttpFoundation\Request;

/**
 * @var Composer\Autoload\ClassLoader
 */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../app/bootstrap.php.cache';

// There was here an APC for autoloading call example here to improve performances.
// Unfortunately, the usage of APC makes sense up to PHP version 5.4. But even with 5.4 it is not fully compatible.
// From PHP 5.5 on, it's better to use APCu AND/OR OpCache. Since we use php 5.5 here, there's no reason I put this APC code here.

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
