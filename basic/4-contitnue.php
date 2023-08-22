<?php 

$arr = ["php", "java", "javascript", "python"];

foreach ( $arr as $val ) {
    if ( $val === "jave" ) {
        continue;
    }
    echo $val;
}


?>