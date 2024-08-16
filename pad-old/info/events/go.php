<?php

  if ( $GLOBALS ['padInfo'] ) include padInfo . 'result.php';

  if ( $GLOBALS ['padInfo'] and str_contains ($padTagContent.$padContent, 'content@') )
   padTrace ('constructs', 'content');  

  if ( $GLOBALS ['padInfo'] ) include padInfo . 'flags.php';

?>