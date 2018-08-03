<?php
namespace Niisan\ReplaceElse;

class ReplaceElse
{

    /**
     * 早期リターン
     */
    public function ifElse(bool $bool)
    {
        if ($bool === true) {
            return 'YES';
        }

        return 'NO';
    }

    /**
     * 初期値代入
     */
    public function ifElse2(bool $bool)
    {
        $str = 'YES';
        if ($bool === false) {
            $str = 'NO';
        }

        return $str;
    }

    /**
     * 三項演算子
     */
    public function ifElse3(bool $bool)
    {
        return ($bool === true) ? 'YES': 'NO';
    }

    /**
     * 三項演算子 (この場合は等価)
     */
    public function ifElseIf(int $num)
    {
        switch ($num) {
            case 0:
                $str = 'ZERO';
                break;
            case 1:
                $str = 'ONE';
                break;
            case 2;
                $str = 'TWO';
                break;
            default:
                $str = 'OTHER';
        }

        return $str;
    }

    /**
     * 早期リターンつなぎ
     */
    public function ifElseif2(int $num)
    {
        if ($num === 0) {
            return 'ZERO';
        }

        if ($num === 1) {
            return 'ONE';
        }

        if ($num === 2) {
            return 'TWO';
        }

        return 'OTHER';
    }

    /**
     * 配列 + null合体演算子
     */
    public function ifElseIf3(int $num)
    {
        $arr = [
            0 => 'ZERO',
            1 => 'ONE',
            2 => 'TWO'
        ];

        return $arr[$num] ?? 'OTHER';
    }
}