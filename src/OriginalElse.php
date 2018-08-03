<?php
namespace Niisan\ReplaceElse;

class OriginalElse
{
    public function ifElse(bool $bool)
    {
        if ($bool === true) {
            return 'YES';
        } else {
            return 'NO';
        }
    }

    public function ifElse2(bool $bool){return $this->ifElse($bool);}
    public function ifElse3(bool $bool){return $this->ifElse($bool);}

    public function ifElseIf(int $num)
    {
        if ($num === 0) {
            $str = 'ZERO';
        } else if ($num === 1) {
            $str = 'ONE';
        } else if ($num === 2) {
            $str = 'TWO';
        } else {
            $str = 'OTHER';
        }

        return $str;
    }

    public function ifElseIf2(int $num){return $this->ifElseIf($num);}
    public function ifElseIf3(int $num){return $this->ifElseIf($num);}
}