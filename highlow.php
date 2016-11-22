<?php 

$minNum = 1;
$maxNum = 100;

$num1 = (isset($argv[1])) ? $argv[1] : $minNum;
$num2 = (isset($argv[2])) ? $argv[2] : $maxNum;

if (is_numeric($num1) == 1 && is_numeric($num2) == 1) {
    $newArray = [$num1, $num2];
    print_r($newArray);
    sort($newArray);
    print_r($newArray);
    $minNum = $newArray[0];
    $maxNum = $newArray[1];
} else {
    echo "Arguments passed are invalid. Running game with default values." . PHP_EOL;
}

echo $minNum  . ' and ' . $maxNum . PHP_EOL;


$answer = mt_rand($minNum, $maxNum);

fwrite(STDOUT, 'Welcome to the High/Low Game!!!' . PHP_EOL);

fwrite(STDOUT, 'Please guess the number I am thinking of between ' . $minNum . ' and ' . $maxNum . PHP_EOL);

$input = null;
$guesses = null;

while ($input != $answer) {
    $input = trim(fgets(STDIN));
    if ($input == $answer) {
        $guesses += 1;
        echo 'You are a winner!!!' . PHP_EOL;
        echo "It took you $guesses guesses" . PHP_EOL;
        exit(0);
    } else if ($input > $answer) {
        fwrite(STDOUT, 'Guess LOWER' . PHP_EOL);
        $guesses += 1;
    } else {
        fwrite(STDOUT, 'Guess HIGHER' . PHP_EOL);
        $guesses += 1;
    }
}

