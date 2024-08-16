<?php

  if ( $GLOBALS ['padInfo'] )  
    include padInfo . 'end.php';
  
  list ( $padBase [$pad], $padEndBase [$pad] ) = explode ( '@end@', $padBase[$pad], 2 );

?>