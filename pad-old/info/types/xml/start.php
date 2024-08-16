<?php
  
  include_once pad . 'info/types/xml/_lib.php';

  $padInfXmlId     = 0;
  $padInfXmlDepth  = 0;
  $padInfXmlTree   = [];
  $padInfXmlLevel  = [];
  $padInfXmlEvents = [];

  if ( isset ( $_REQUEST['padInclude'] ) )
    $padInfXmlDir = "xml/include/$padStartPage";
  else
    $padInfXmlDir = "xml/complete/$padStartPage";

  if ( file_exists ( padData . "$padInfXmlDir/long.xml" )  ) unlink ( padData . "$padInfXmlDir/long.xml"  ) ;
  if ( file_exists ( padData . "$padInfXmlDir/short.xml" ) ) unlink ( padData . "$padInfXmlDir/short.xml" ) ;

?>