<?php

namespace App\Services;

class ScrambleService {
    private const SCRAMBLE_LENGTH = 20;

    private const MOVES = [
        'R',
        'L',
        'U',
        'D',
        'F',
        'B'
    ];

    private const DIR = [
        '',
        '\'',
        '2'
    ];

    public function generateScramble(): array
    {
        $scramble = [];

        for ($i = 0; $i < self::SCRAMBLE_LENGTH; $i++) {
            $move = self::MOVES[rand(0, 5)];
            $direction = self::DIR[rand(0,2)];

            $scramble[] = $move . $direction;
        }

        return $scramble;
    }
}
