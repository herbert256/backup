<?php
     
  if ( $GLOBALS ['padInfo'] )
    include padInfo . 'walk.php';

  $padWalk [$pad] = 'next';
  
  include pad . "catch/go.php"; 
  include pad . "level/flags.php";

  if ( $padWalk [$pad] ) {

    if ( $padArray [$pad] ) 
      $padData [$pad] = $padTagResult;
 
    reset ( $padData [$pad] );

  }

?>