<?php
/**
 * @author: Viskov Sergey
 * @date: 3/18/16
 * @time: 11:23 AM
 */

namespace LTDBeget\ascii;


/**
 * Class AsciiControlChar
 * @package LTDBeget\ascii
 * @method static AsciiControlChar NULL()
 * @method static AsciiControlChar HEADING_START()
 * @method static AsciiControlChar TEXT_START()
 * @method static AsciiControlChar TEXT_END()
 * @method static AsciiControlChar TRANSMISSION_END()
 * @method static AsciiControlChar ENQUIRY()
 * @method static AsciiControlChar ACKNOWLEDGMENT()
 * @method static AsciiControlChar BELL()
 * @method static AsciiControlChar BACKSPACE()
 * @method static AsciiControlChar HORIZONTAL_TAB()
 * @method static AsciiControlChar LINE_FEED()
 * @method static AsciiControlChar VERTICAL_TAB()
 * @method static AsciiControlChar FORM_FEED()
 * @method static AsciiControlChar CARRIAGE_RETURN()
 * @method static AsciiControlChar SHIFT_OUT()
 * @method static AsciiControlChar SHIFT_IN()
 * @method static AsciiControlChar DATA_LINE_ESCAPE()
 * @method static AsciiControlChar DEVICE_CONTROL_1()
 * @method static AsciiControlChar DEVICE_CONTROL_2()
 * @method static AsciiControlChar DEVICE_CONTROL_3()
 * @method static AsciiControlChar DEVICE_CONTROL_4()
 * @method static AsciiControlChar NEGATIVE_ACKNOWLEDGEMENT()
 * @method static AsciiControlChar SYNCHRONOUS_IDLE()
 * @method static AsciiControlChar TRANSMIT_BLOCK_END()
 * @method static AsciiControlChar CANCEL()
 * @method static AsciiControlChar MEDIUM_END()
 * @method static AsciiControlChar SUBSTITUTE()
 * @method static AsciiControlChar ESCAPE()
 * @method static AsciiControlChar FILE_SEPARATOR()
 * @method static AsciiControlChar GROUP_SEPARATOR()
 * @method static AsciiControlChar RECORD_SEPARATOR()
 * @method static AsciiControlChar UNIT_SEPARATOR()
 */
class AsciiControlChar extends AsciiChar
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
}