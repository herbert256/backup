<?php

  if ( padTagParm ('after') and $padWalk [$pad] == 'start' ) {
    $padWalk [$pad] = 'end';
    return TRUE;
  }

  if ( ! $padContent and $padParm ) 
    $padReturn = padColorsFile ( padApp . $padParm ) ;
  else {
    $padReturn = padColorsString ( $padContent ) ;
    $padReturn = substr($padReturn, 5, -6);
  }


	return str_replace ( '}', '&close;', $padReturn );


?>