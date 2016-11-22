<?php 

do {
    fwrite(STDOUT, 'Please enter a starting number:' . PHP_EOL);
    $firstNum = trim(fgets(STDIN));
} while (!is_numeric($firstNum));
PHP_EOL;


do {
    fwrite(STDOUT, 'Please enter an ending number higher than the first:' . PHP_EOL);
    $secondNum = trim(fgets(STDIN));
} while (is_numeric($secondNum) != 1 || $secondNum < $firstNum);

fwrite(STDOUT, 'Please enter a number to increment by:' . PHP_EOL);
$increment = trim(fgets(STDIN));
PHP_EOL;

fwrite(STDOUT, 'Here is the range of numbers based on your input...' . PHP_EOL);

for ($i = $firstNum; $i <= $secondNum; $i += $increment) {
    echo $i . PHP_EOL;
}

exit(0);