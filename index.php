<?php
/*
 * Copyright (c) 2011, Johannes Becker
 * Based on Hydrogen-MVC-Starter by Tom Frost
 * All rights reserved.
 *
 * ******
 *
 * The Hydrogen MVC Starter is a starting point for building a Hydrogen-powered
 * MVC application.  Hydrogen can be used for much more than the standard MVC
 * pattern, but its MVC tools are very powerful.  Using this project as a
 * template allows you to quickly create an MVC-style webapp.
 *
 * IMPORTANT! BEFORE YOU BEGIN:
 * - Copy config/config.sample.ini.php to config/config.ini.php
 * - Edit the "app_url" line of the config to point to the URL where you'll
 * 		be installing (or testing) this app.
 *
 * BEFORE YOU START TURNING THIS STARTER INTO YOUR OWN WEBAPP:
 * - Replace all instances of the namespace 'myapp' with the actual name of
 * 		your application.  This will also require renaming files and folders!
 * - Review config/hydrogen.autoconfig.php.  The 'autoconfig' file is
 * 		full of settings specific to the webapp that, if you were to distribute
 * 		your web application for others to install, should not be changed by
 * 		them.  As such, you will not need to change it in order to run this
 * 		sample app, but you should be aware of all the settings available to
 * 		you there.  There are settings you REALLY need to change before
 * 		launching a Hydrogen webapp in production.  During development, all
 * 		caching is turned off by default.  That would be bad in production!
 */

require_once(__DIR__ . '/lib/streampattern/streampattern.inc.php');
use hydrogen\controller\Dispatcher;
use hydrogen\errorhandler\ErrorHandler;

// The following line enables our error handler.  During development, it's more
// convenient to have those ugly PHP errors appear in the browser (which the
// error handler prevents), so we'll leave this line commented until we go
// to production.
//ErrorHandler::attachErrorPage();

// The following rules determine which controller is executed depending on
// the URL that was requested.  See the Dispatcher documentation for details.
Dispatcher::addHomeMatchRule('\streampattern\controllers\IndexController', 'index');
Dispatcher::addPathInfoAutoMapRule('\streampattern\controllers', 'Controller');
Dispatcher::addMatchAllRule('\streampattern\controllers\ErrorController', 'error404');

// Now that the rules are set up, this line will tell the Dispatcher to load
// up the correct controller!  That's it-- index.php is done, and the
// controller will take it from here.
Dispatcher::dispatch();

?>
