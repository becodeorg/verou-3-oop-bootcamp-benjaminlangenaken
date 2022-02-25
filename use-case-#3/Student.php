<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Student
{
    public string $name;
    public int $score;
    public string $group;

    function __construct(string $name, int $score, string $group)
    {
        $this->name = $name;
        $this->score = $score;
        $this->group = $group;
    }
}
