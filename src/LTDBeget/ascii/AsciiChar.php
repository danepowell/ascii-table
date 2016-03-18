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
 *
 * @method static AsciiChar NULL()
 * @method static AsciiChar HEADING_START()
 * @method static AsciiChar TEXT_START()
 * @method static AsciiChar TEXT_END()
 * @method static AsciiChar TRANSMISSION_END()
 * @method static AsciiChar ENQUIRY()
 * @method static AsciiChar ACKNOWLEDGMENT()
 * @method static AsciiChar BELL()
 * @method static AsciiChar BACKSPACE()
 * @method static AsciiChar HORIZONTAL_TAB()
 * @method static AsciiChar LINE_FEED()
 * @method static AsciiChar VERTICAL_TAB()
 * @method static AsciiChar FORM_FEED()
 * @method static AsciiChar CARRIAGE_RETURN()
 * @method static AsciiChar SHIFT_OUT()
 * @method static AsciiChar SHIFT_IN()
 * @method static AsciiChar DATA_LINE_ESCAPE()
 * @method static AsciiChar DEVICE_CONTROL_1()
 * @method static AsciiChar DEVICE_CONTROL_2()
 * @method static AsciiChar DEVICE_CONTROL_3()
 * @method static AsciiChar DEVICE_CONTROL_4()
 * @method static AsciiChar NEGATIVE_ACKNOWLEDGEMENT()
 * @method static AsciiChar SYNCHRONOUS_IDLE()
 * @method static AsciiChar TRANSMIT_BLOCK_END()
 * @method static AsciiChar CANCEL()
 * @method static AsciiChar MEDIUM_END()
 * @method static AsciiChar SUBSTITUTE()
 * @method static AsciiChar ESCAPE()
 * @method static AsciiChar FILE_SEPARATOR()
 * @method static AsciiChar GROUP_SEPARATOR()
 * @method static AsciiChar RECORD_SEPARATOR()
 * @method static AsciiChar UNIT_SEPARATOR()
 * @method static AsciiChar SPACE()
 * @method static AsciiChar EXCLAMATION_MARK()
 * @method static AsciiChar DOUBLE_QUOTES()
 * @method static AsciiChar HASHTAG()
 * @method static AsciiChar DOLLAR()
 * @method static AsciiChar PROCENTTECKEN()
 * @method static AsciiChar AMPERSAND()
 * @method static AsciiChar SINGLE_QUOTE()
 * @method static AsciiChar OPEN_BRACKET()
 * @method static AsciiChar CLOSE_BRACKET()
 * @method static AsciiChar ASTERISK()
 * @method static AsciiChar PLUS()
 * @method static AsciiChar COMMA()
 * @method static AsciiChar HYPHEN()
 * @method static AsciiChar DOT()
 * @method static AsciiChar SLASH()
 * @method static AsciiChar ZERO()
 * @method static AsciiChar ONE()
 * @method static AsciiChar TWO()
 * @method static AsciiChar THREE()
 * @method static AsciiChar FOUR()
 * @method static AsciiChar FIVE()
 * @method static AsciiChar SIX()
 * @method static AsciiChar SEVEN()
 * @method static AsciiChar EIGHT()
 * @method static AsciiChar NINE()
 * @method static AsciiChar COLON()
 * @method static AsciiChar SEMICOLON()
 * @method static AsciiChar LESS_THAN()
 * @method static AsciiChar EQUALS()
 * @method static AsciiChar GREATER_THAN()
 * @method static AsciiChar QUESTION_MARK()
 * @method static AsciiChar AT_SYMBOL()
 * @method static AsciiChar A_UPPERCASE()
 * @method static AsciiChar B_UPPERCASE()
 * @method static AsciiChar C_UPPERCASE()
 * @method static AsciiChar D_UPPERCASE()
 * @method static AsciiChar E_UPPERCASE()
 * @method static AsciiChar F_UPPERCASE()
 * @method static AsciiChar G_UPPERCASE()
 * @method static AsciiChar H_UPPERCASE()
 * @method static AsciiChar I_UPPERCASE()
 * @method static AsciiChar J_UPPERCASE()
 * @method static AsciiChar K_UPPERCASE()
 * @method static AsciiChar L_UPPERCASE()
 * @method static AsciiChar M_UPPERCASE()
 * @method static AsciiChar N_UPPERCASE()
 * @method static AsciiChar O_UPPERCASE()
 * @method static AsciiChar P_UPPERCASE()
 * @method static AsciiChar Q_UPPERCASE()
 * @method static AsciiChar R_UPPERCASE()
 * @method static AsciiChar S_UPPERCASE()
 * @method static AsciiChar T_UPPERCASE()
 * @method static AsciiChar U_UPPERCASE()
 * @method static AsciiChar V_UPPERCASE()
 * @method static AsciiChar W_UPPERCASE()
 * @method static AsciiChar X_UPPERCASE()
 * @method static AsciiChar Y_UPPERCASE()
 * @method static AsciiChar Z_UPPERCASE()
 * @method static AsciiChar OPENING_BRACKET()
 * @method static AsciiChar BACKSLASH()
 * @method static AsciiChar CLOSING_BRACKET()
 * @method static AsciiChar CARET()
 * @method static AsciiChar UNDERSCORE()
 * @method static AsciiChar GRAVE_ACCENT()
 * @method static AsciiChar A_LOWERCASE()
 * @method static AsciiChar B_LOWERCASE()
 * @method static AsciiChar C_LOWERCASE()
 * @method static AsciiChar D_LOWERCASE()
 * @method static AsciiChar E_LOWERCASE()
 * @method static AsciiChar F_LOWERCASE()
 * @method static AsciiChar G_LOWERCASE()
 * @method static AsciiChar H_LOWERCASE()
 * @method static AsciiChar I_LOWERCASE()
 * @method static AsciiChar J_LOWERCASE()
 * @method static AsciiChar K_LOWERCASE()
 * @method static AsciiChar L_LOWERCASE()
 * @method static AsciiChar M_LOWERCASE()
 * @method static AsciiChar N_LOWERCASE()
 * @method static AsciiChar O_LOWERCASE()
 * @method static AsciiChar P_LOWERCASE()
 * @method static AsciiChar Q_LOWERCASE()
 * @method static AsciiChar R_LOWERCASE()
 * @method static AsciiChar S_LOWERCASE()
 * @method static AsciiChar T_LOWERCASE()
 * @method static AsciiChar U_LOWERCASE()
 * @method static AsciiChar V_LOWERCASE()
 * @method static AsciiChar W_LOWERCASE()
 * @method static AsciiChar X_LOWERCASE()
 * @method static AsciiChar Y_LOWERCASE()
 * @method static AsciiChar Z_LOWERCASE()
 * @method static AsciiChar OPENING_BRACE()
 * @method static AsciiChar VERTICAL_BAR()
 * @method static AsciiChar CLOSING_BRACE()
 * @method static AsciiChar TILDE()
 * @method static AsciiChar DELETE()
 */
class AsciiChar extends Enum
{
    const NULL                     = 0;
    const HEADING_START            = 1;
    const TEXT_START               = 2;
    const TEXT_END                 = 3;
    const TRANSMISSION_END         = 4;
    const ENQUIRY                  = 5;
    const ACKNOWLEDGMENT           = 6;
    const BELL                     = 7;
    const BACKSPACE                = 8;
    const HORIZONTAL_TAB           = 9;
    const LINE_FEED                = 10;
    const VERTICAL_TAB             = 11;
    const FORM_FEED                = 12;
    const CARRIAGE_RETURN          = 13;
    const SHIFT_OUT                = 14;
    const SHIFT_IN                 = 15;
    const DATA_LINE_ESCAPE         = 16;
    const DEVICE_CONTROL_1         = 17;
    const DEVICE_CONTROL_2         = 18;
    const DEVICE_CONTROL_3         = 19;
    const DEVICE_CONTROL_4         = 20;
    const NEGATIVE_ACKNOWLEDGEMENT = 21;
    const SYNCHRONOUS_IDLE         = 22;
    const TRANSMIT_BLOCK_END       = 23;
    const CANCEL                   = 24;
    const MEDIUM_END               = 25;
    const SUBSTITUTE               = 26;
    const ESCAPE                   = 27;
    const FILE_SEPARATOR           = 28;
    const GROUP_SEPARATOR          = 29;
    const RECORD_SEPARATOR         = 30;
    const UNIT_SEPARATOR           = 31;
    const SPACE                    = 32;
    const EXCLAMATION_MARK         = 33;
    const DOUBLE_QUOTES            = 34;
    const HASHTAG                  = 35;
    const DOLLAR                   = 36;
    const PROCENTTECKEN            = 37;
    const AMPERSAND                = 38;
    const SINGLE_QUOTE             = 39;
    const OPEN_BRACKET             = 40;
    const CLOSE_BRACKET            = 41;
    const ASTERISK                 = 42;
    const PLUS                     = 43;
    const COMMA                    = 44;
    const HYPHEN                   = 45;
    const DOT                      = 46;
    const SLASH                    = 47;
    const ZERO                     = 48;
    const ONE                      = 49;
    const TWO                      = 50;
    const THREE                    = 51;
    const FOUR                     = 52;
    const FIVE                     = 53;
    const SIX                      = 54;
    const SEVEN                    = 55;
    const EIGHT                    = 56;
    const NINE                     = 57;
    const COLON                    = 58;
    const SEMICOLON                = 59;
    const LESS_THAN                = 60;
    const EQUALS                   = 61;
    const GREATER_THAN             = 62;
    const QUESTION_MARK            = 63;
    const AT_SYMBOL                = 64;
    const A_UPPERCASE              = 65;
    const B_UPPERCASE              = 66;
    const C_UPPERCASE              = 67;
    const D_UPPERCASE              = 68;
    const E_UPPERCASE              = 69;
    const F_UPPERCASE              = 70;
    const G_UPPERCASE              = 71;
    const H_UPPERCASE              = 72;
    const I_UPPERCASE              = 73;
    const J_UPPERCASE              = 74;
    const K_UPPERCASE              = 75;
    const L_UPPERCASE              = 76;
    const M_UPPERCASE              = 77;
    const N_UPPERCASE              = 78;
    const O_UPPERCASE              = 79;
    const P_UPPERCASE              = 80;
    const Q_UPPERCASE              = 81;
    const R_UPPERCASE              = 82;
    const S_UPPERCASE              = 83;
    const T_UPPERCASE              = 84;
    const U_UPPERCASE              = 85;
    const V_UPPERCASE              = 86;
    const W_UPPERCASE              = 87;
    const X_UPPERCASE              = 88;
    const Y_UPPERCASE              = 89;
    const Z_UPPERCASE              = 90;
    const OPENING_BRACKET          = 91;
    const BACKSLASH                = 92;
    const CLOSING_BRACKET          = 93;
    const CARET                    = 94;
    const UNDERSCORE               = 95;
    const GRAVE_ACCENT             = 96;
    const A_LOWERCASE              = 97;
    const B_LOWERCASE              = 98;
    const C_LOWERCASE              = 99;
    const D_LOWERCASE              = 100;
    const E_LOWERCASE              = 101;
    const F_LOWERCASE              = 102;
    const G_LOWERCASE              = 103;
    const H_LOWERCASE              = 104;
    const I_LOWERCASE              = 105;
    const J_LOWERCASE              = 106;
    const K_LOWERCASE              = 107;
    const L_LOWERCASE              = 108;
    const M_LOWERCASE              = 109;
    const N_LOWERCASE              = 110;
    const O_LOWERCASE              = 111;
    const P_LOWERCASE              = 112;
    const Q_LOWERCASE              = 113;
    const R_LOWERCASE              = 114;
    const S_LOWERCASE              = 115;
    const T_LOWERCASE              = 116;
    const U_LOWERCASE              = 117;
    const V_LOWERCASE              = 118;
    const W_LOWERCASE              = 119;
    const X_LOWERCASE              = 120;
    const Y_LOWERCASE              = 121;
    const Z_LOWERCASE              = 122;
    const OPENING_BRACE            = 123;
    const VERTICAL_BAR             = 124;
    const CLOSING_BRACE            = 125;
    const TILDE                    = 126;
    const DELETE                   = 127;

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