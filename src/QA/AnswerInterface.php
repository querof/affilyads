<?php

declare(strict_types=1);

namespace Affilyadds\src\QA;

interface AnswerInterface
{
    public function get(): AnswerInterface;

    public function the(): AnswerInterface;

    public function answer(): AnswerInterface;
}
