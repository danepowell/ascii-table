<?php
/**
 * @author: Viskov Sergey
 * @date: 3/18/16
 * @time: 11:18 AM
 */

namespace LTDBeget\ascii;


use MabeEnum\Enum;

/**
 * Class AsciiChar
 * @package LTDBeget\ascii
 */
abstract class AsciiChar extends Enum
{
    /**
     * ascii table symbol as char
     * @return string
     */
    public function __toString()
    {
        return $this->getChar();
    }

    /**
     * @return string
     */
    public function getChar() : string
    {
        return chr($this->getValue());
    }

    /**
     * @return int
     */
    public function getDec() : int
    {
        return $this->getValue();
    }

    /**
     * @return string
     */
    public function getHex() : string
    {
        return dechex($this->getValue());
    }

    /**
     * @return bool
     */
    public function isControlChar() : bool
    {
        return $this->getValue() >= 0 && $this->getValue() <= 31;
    }

    /**
     * @return bool
     */
    public function isPrintableChar() : bool
    {
        return $this->getValue() >= 32 && $this->getValue() <= 127;
    }
}