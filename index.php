<?php 

echo "Введите первое число:";
do {
    $a = trim(fgets(STDIN));
    if (!ctype_digit($a)) {
        fwrite(STDERR,"Введите, пожалуйста число.");
    }
} while (!ctype_digit($a));

echo "Введите второе число:";
do {
    $b = trim(fgets(STDIN));
    if (!ctype_digit($b)) {
        fwrite(STDERR,"Введите, пожалуйста число.");
    }
} while(!ctype_digit($b)); 

if ((int)$b === 0) {
    fwrite(STDERR,"Делить на 0 нельзя");
} else {
    $result = $a/$b;
    fwrite(STDOUT,"Результат: $result");
}
