<?php

declare(strict_types=1);

namespace Affilyadds\src\QA;


class Answer implements AnswerInterface
{
    /** @var int */
    private $counter;

    public function get(): AnswerInterface
    {
        $this->counter++;
        return $this;
    }

    public function the(): AnswerInterface
    {
        $this->counter++;
        return $this;
    }

    public function answer(): AnswerInterface
    {
        $this->counter = $this->counter * 2;
        return $this;
    }

    public function __toString(): string
    {
        return (string)$this->counter;
    }
}
