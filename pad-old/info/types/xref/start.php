<?php

  include_once pad . 'info/types/xref/_lib.php';
    
  $padInfXrefId     = 0;
  $padInfXrefDepth  = 0;
  $padInfXrefEvents = [];
  $padInfXrefSource = padInfoGet ( padApp . $padStartPage . '.pad' );

  if ( $padInfXrefXml and file_exists ( padData . padXrefLocation () . "xref.xml" ) )
    unlink ( padData . padXrefLocation () . "xref.xml" );

?>