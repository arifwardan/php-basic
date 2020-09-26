<?php

$n = 9;
 
for ($i=0; $i < $n; $i++) { 
    echo $i * 2;
}

echo PHP_EOL;

for ($i=1; $i < $n = 5; $i++) { 
    $x = $i * 2 - 1;
    if($x == true){
        echo $x;
    }else{
        continue;
    }
}

echo PHP_EOL;

$n = 9;

for ($i=1; $i <= $n; $i++) { 
    echo $i * 2 - 1;
}

echo PHP_EOL;

for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
        if ($i > $j) {
            echo $j;
        }
    }
    echo PHP_EOL;
}

for ($i=0; $i <= $n; $i++) { 
    for ($j=0; $j <= $n; $j++) { 
            echo "($i,$j) ";
    }
    echo PHP_EOL;
}

for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
            if ($i % 2) {
                echo "-";
            }else{
                echo "+";
            }
    }
    echo PHP_EOL;
}

for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
            if ($j % 2) {
                echo "+";
            }else{
                echo "-";
            }
    }
    echo PHP_EOL;
}

for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <= $n; $j++) { 
            if ($j == $i) {
                echo "+";
            }else{
                echo "-";
            }
    }
    echo PHP_EOL;
}

for ($i=0; $i <= $n; $i++) { 
    for ($j=0; $j <= $n; $j++) { 
            if ($i + $j == $n) {
                echo "+";
            }else{
                echo "-";
            }
    }
    echo PHP_EOL;
}

for ($i=0; $i <= $n; $i++) { 
    for ($j=0; $j <= $n; $j++) { 
            if ($i > $j || $i == $j) {
                echo "+";
            }else{
                echo "-";
            }
    }
    echo PHP_EOL;
}

for ($i=0; $i <= $n; $i++) { 
    for ($j=0; $j <= $n; $j++) { 
            if ($i + $j > $n) {
                echo "+";
            }else{
                echo "-";
            }
    }
    echo PHP_EOL;
}








