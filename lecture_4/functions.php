<?php
    function f1() {
        echo "<h1>hello php</h1>";
        echo "<h1>hello laravel</h1>";
    }

    function f2() {
        return "<h1>hello</h1>";
        echo "<h1>hello </h1>";
    }
    function f3($a,$b,$c=9){
        echo $a+$b+$c;
    }

    f3(3,4,8);
    f1();
    f2();
?>