<?php

  $padLibDirectory = new RecursiveDirectoryIterator ( '/app/_database' );
  $padLibIterator  = new RecursiveIteratorIterator  ( $padLibDirectory );

  foreach ( $padLibIterator as $padLibOne ) {

    $padLibFile = str_replace ('\\', '/' , $padLibOne->getPathname() );

    if ( substr($padLibFile, -4) == '.php' )
      include_once $padLibFile;

  }

?>