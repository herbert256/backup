<?php

  include '/pad/sequence/inits/inits.php';
      
  if     ( $padSeqPull  ) $padSeqFor = $padSeqStore [$padSeqPull];
  elseif ( $padSeqRange ) $padSeqFor = padGetRange ( $padSeqRange, $padSeqInc );
  elseif ( $padSeqList  ) $padSeqFor = padGetList ( $padSeqList );

  if ( $GLOBALS ['padInfo'] ) 
    include '/pad/info/events/sequence.php'; 

  if ( $padSeqFor !== FALSE )
    include "/pad/sequence/builds/for.php";
  else
    include "/pad/sequence/builds/$padSeqBuild.php";

  include '/pad/sequence/actions.php';
 
  if ( file_exists ( "$padSeqType/exit.php" ) )   
    include "$padSeqType/exit.php";    

  include '/pad/sequence/exits/push.php';
  include '/pad/sequence/exits/return.php';

  return $padSeqReturn;

?>