<?php

/*******************************************************************************
*   Own statements - START -
*   We've now moved the ZF to the '/library' folder.
*   This library folder is included by magic.
******************************************************************************/

//add the ZEND Framework to the include path ( we assume that it's missing on the webserver etc. )
//define( 'ZF_PATH', '../../ZendFramework-1.12.7/library' );
//set_include_path( implode( ";", array( ZF_PATH, get_include_path(), ) ) );

/*******************************************************************************
*   Own statements - END
******************************************************************************/

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()
            ->run();
