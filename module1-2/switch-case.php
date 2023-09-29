<?php
$color = 'violate';
// switch($color){
//     case $color=='red':
//       echo "{$color} is my favorite color";
//      break;
//     case $color=='green':
//       echo "{$color} is my favorite color";
//      break;
//       case $color=='blue':
//       echo "{$color} is my favorite color";
//      break;
//     case $color=='balck':
//       echo "{$color} is my favorite color";
//      break;
//      default:
//      echo "White is my favorite color";

// }

// another wyas
switch ($color) {
        case 'red':
        case 'green':
        case 'blue':
        case 'balck':
                echo "{$color} is my favorite color";
                break;
        default:
                echo " White is my favorite color";
}
