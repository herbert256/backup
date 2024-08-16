<?php


  function padEval ( $eval, $value='' ) {

    if ( strlen(trim($eval)) == 0 )
      return ''; 

    if ( $GLOBALS ['padInfo'] )
      padEvalInfo ( $eval, $value );

    $result = [];

    padEvalParse ( $result, $eval, $value );    
    padEvalAfter ( $result );  
    padEvalGo    ( $result, array_key_first($result), array_key_last($result), $value ) ;
 
    $return = reset ( $result );
    return $return [0];

  }  
  

  function padEvalInfo ( $eval, $value='' ) {

    include padInfo . 'eval/start.php';

    $result = [];

    padEvalParse ( $result, $eval, $value );    
 
    include padInfo . 'eval/parse.php';

    padEvalAfter ( $result );  
 
    include padInfo . 'eval/after.php';

    padEvalGo ( $result, array_key_first($result), array_key_last($result), $value) ;
 
    include padInfo . 'eval/go.php';

    $key = array_key_first ($result);

    if     ( count($result) < 1        ) padError ("No result back: $eval");
    elseif ( count($result) > 1        ) padError ("More then one result back: $eval");
    elseif ( $result[$key][1] <> 'VAL' ) padError ("Result is not a value: $eval");

    include padInfo . 'eval/end.php';

    return $result [$key] [0];

  }  
  
?>