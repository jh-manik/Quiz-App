<?php

function evaluateQuiz(array $questions, array $answers) : int {
    $score = 0;

    foreach ( $questions as $quiz => $question  ) {
        if ( $answers[$quiz] === $question['correct'] ) {
            $score++;
        }
    }

    return $score;
}

$questions = [
    ['question' => 'What is 4 + 4?', 'correct' => '8'],
    ['question' => 'What is the Capital of France?', 'correct' => 'Paris'],
    ['question' => 'Hwo wrote "Hamlet"?', 'correct' => 'Shakespeare']
];

$answers = [];

foreach ( $questions as $quiz => $question ) {
    print(($quiz + 1) . ". " . $question['question'] . PHP_EOL);
    $answers[] = trim(readline('Your Answer: '));
}

$score = evaluateQuiz($questions, $answers);

if ( $score === count($questions) ) {
    print("Exellent Job!\n");
} else if ( $score > 1 ) {
    print("Good Efforts!\n");
} else {
    print("Better luck next Time!\n");
}