<?php

  if ( $GLOBALS ['padInfo'] )
    if ( $padInfTraceOptions )
     padTrace ( 'option', $padOptionName, "type ==> $padOptions" );

  if ( $GLOBALS ['padInfo'] )
    include padInfo . 'options.php'; 

  padXapp ( 'options', $padOptionName );
  
?>