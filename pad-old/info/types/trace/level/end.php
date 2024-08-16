<?php

  include padInfo . 'result.php';   
  
  if ( ! isset ( $padInfTraceLevel [$pad] ) ) padTraceSet ( $pad );
  if ( ! $padInfTraceLevel [$pad]           ) padTraceSet ( $pad );

  if ( $padInfTraceStartEndLvl )
   $GLOBALS ['padInfo']( 'level', 'end' );

  if ( $padInfTraceStatus )
    padTraceStatus ( );

  if ( $padInfTraceLocalChk ) {
    padTraceCheckLocal ( $padInfTraceLevel [$pad] . '/0'     );
    padTraceCheckLocal ( $padInfTraceLevel [$pad] . '/inits' );
    padTraceCheckLocal ( $padInfTraceLevel [$pad]            );
    padTraceCheckLocal ( $padInfTraceLevel [$pad] . '/99999' );
    padTraceCheckLocal ( $padInfTraceLevel [$pad] . '/exits' );
  }
  
  if ( ! isset ( $padInfTraceLevelChilds [$pad] ) ) 
    $padInfTraceLevelChilds [$pad] = 0;

  if ( $padInfTraceChilds ) 
    padTraceChilds ( $padInfTraceLevel [$pad], $padInfTraceLevelChilds [$pad], 'level' );

  if ( $pad > 0 and ! $padInfTraceKeepEmpty and $padInfTraceLevel [$pad] and ! $padInfTraceLevelChilds [$pad] )
    padTraceDeleteDir ( padData . $padInfTraceDir . $padInfTraceLevel [$pad] . '/' ); 

  $padInfTraceLevel [$pad] = '';

  $padInfTraceLevelChilds [$pad] = 0;
  $padInfTraceOccurChilds [$pad] = [];

?>