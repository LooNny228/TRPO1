<?php

namespace Gaivoronskiy;

class LineEquation {
    protected $x;

    public function solve(float $a, float $b): array {
        if($a !== 0) {
            MyLog::log('This is line equation');
            return $this->x = array(-$b / $a);
        }
        throw new GaivoronskiyExeption('No roots');
    }
}