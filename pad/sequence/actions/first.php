<?php

  if ( $padSeqActionValue === TRUE or ! ctype_digit($padSeqActionValue) )
    if ( $padSeqCnt )
      $padSeqActionCnt = $padSeqCnt;
    else
      $padSeqActionCnt = 1;
  else
    $padSeqActionCnt = $padSeqActionValue;    

  if ( count($padSeqResult) > $padSeqActionCnt )
    if ( $padSeqActionName == 'first')
      return array_slice ( $padSeqResult, 0, $padSeqActionCnt );
    else 
      return array_slice ( $padSeqResult, $padSeqActionCnt * -1 );
  else
    return $padSeqResult;
  
?>