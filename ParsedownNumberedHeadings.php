<?php

#
#
# Parsedown Numbered Headings
# https://github.com/FransBlauw/ParsedownNumberedHeadings
#
# (c) Frans Blauw
# https://fransblauw.com
#
# (c) Emanuil Rusev
# http://erusev.com
#
# For the full license information, view the LICENSE file that was distributed
# with this source code.
#
#

class ParsedownNumberedHeadings extends Parsedown
{
  protected $HeadingNumbers,$PreviousLevel;
  
  function __construct() {
    global $HeadingNumbers,$PreviousLevel;
    for ($i = 1; $i <= 8; $i++) {
      $HeadingNumbers[$i] = 0;
    }
      $PreviousLevel = 0;
  }
  
  
  protected function blockHeader($Line) {
    global $HeadingNumbers,$PreviousLevel;
    
    $Line = parent::blockHeader($Line);
      
    $Level = substr($Line["element"]["name"],1);
    if ($Level > 8) return $Line;
    
    if ($PreviousLevel > $Level) {
      for ($i = $PreviousLevel; $i > $Level; $i--) {
        $HeadingNumbers[$i] = 0;
      }
    }
    $PreviousLevel = $Level;
    
    $HeadingNumbers[$Level] += 1;
    $Numbering = "";
    for ($i = 1;  $i<=$Level; $i++) {
      $Numbering .= $HeadingNumbers[$i].".";	
    }
    
    $Line['element']['handler']['argument'] = $Numbering." ".$Line['element']['handler']['argument'];

    return $Line;
  }
}
