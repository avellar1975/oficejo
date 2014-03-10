<?php

/*
 * Pagina 38
 */
//WHILE
$a = 0;

while ($a < 9){
    echo $a."<br />";
    $a ++;
}
//FOR
for($i = 0; $i <=100; $i++){
    echo $i.' - ';
}
//SWITCH
$b = 3;
switch ($b) {
    case 0:
        print "i e igual a 0";
        break;

    case 1:
        print "i e igual a 1";
        break;

    default:
        print "i nao e igual a 0 ou 1";
}

?>
