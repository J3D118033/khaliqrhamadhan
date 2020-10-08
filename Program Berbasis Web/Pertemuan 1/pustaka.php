<?php
    function aksiOprasi($a,$b,$o) {
        $n1 = $a;
        $n2 = $b;

        switch($o) {
            case '+': {$hsl = $n1 + $n2; break;}
            case '-': {$hsl = $n1 - $n2; break;}
            case '/': {$hsl = $n1 / $n2; break;}
            case 'x': {$hsl = $n1 * $n2; break;}
        }
        return $hsl;
    }

    /*echo aksiOprasi(7,5,'x');
    echo '<br>';
    echo aksiOprasi(17,8,'/'); */
?>