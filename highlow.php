<?php 

$answer = mt_rand(1, 100);

`say Welcome to the high low game`;

fwrite(STDOUT, 'Welcome to the High/Low Game!!!' . PHP_EOL);

fwrite(STDOUT, 'Please guess the number I am thinking of between 1 and 100' . PHP_EOL);

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

