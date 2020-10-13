<?php

declare(strict_types=1);

namespace Affilyadds\test\QA;

use Affilyadds\src\QA\Answer;
use Affilyadds\src\QA\Question;
use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{
    public function testValidOutput(): void
    {
        $answer = new Answer;
        $this->expectOutputString('What is 2 + 2?' . PHP_EOL . '4' . PHP_EOL);
        $question = new Question($answer);
    }
}
