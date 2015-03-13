<?php

    //add the ZEND Framework to the include path ( we assume that it's missing on the webserver etc. )
    define( 'ZF_PATH', '../ZendFramework-1.12.7/library' );
    set_include_path( implode( ";", array( ZF_PATH, get_include_path(), ) ) );

    //show include path
    echo "<b>Include Path:</b> [" . ini_get('include_path') . "]<br><br>";

    //include required classes from ZEND Framework
    include( "Zend/Version.php" );

    //acclaim
    echo 'Welcome to the <b>4th</b> ZEND Framework Test.</b><br><br>';
    echo 'Our included ZEND Framework version is <b>[' . Zend_Version::VERSION . ']</b>';
