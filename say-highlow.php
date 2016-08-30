<?php 

function game () {
    echo "\033c";
    $answer = mt_rand(1, 100);

    `say -v 'Ava' Welcome to the high low game`;
    `say -v 'Ava' Please guess a number between 1 and 100`;

    $input = null;
    $guesses = null;

    while ($input != $answer) {
        $input = trim(fgets(STDIN));
        $guesses += 1;
        if ($input == $answer) {
            `say -v 'Ava' You won. Good for you. You are a special person...`;
            `say -v 'Ava' Oh...well...considering how many guesses you made...maybe not so special`;
        } else if ($input > $answer) {
            `say -v 'Ava' Too high. Try again.`;
            fwrite(STDOUT, 'Guess LOWER' . PHP_EOL);
        } else {
            `say -v 'Ava' Too small. Try again.`;
            fwrite(STDOUT, 'Guess HIGHER' . PHP_EOL);
        }
    }
    `say Do you want to play again?`;
    fwrite(STDOUT, 'Type (y) for yes and (n) for no.' . PHP_EOL);

    $response = trim(fgets(STDIN));

    while ($response != 'y' && $response != 'n') {
        `say That is not a valid response. Try again.`;
        fwrite(STDOUT, 'Type (y) for yes and (n) for no.' . PHP_EOL);
        $response = trim(fgets(STDIN));
        echo $response;
    }
    if ($response == 'y') {
        game();
    } else {
        `say Goodbye.`;
        exit(0);
    }
}

game();


 

