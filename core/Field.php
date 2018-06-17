<?php

namespace App\core;

final class Field{
    private $pattern;
    private $editable;

    public function __construct(string $pattern, bool $editable){
        $this->pattern = $pattern;
        $this->editable = $editable;
    }

    public function isValid($value){
        return \preg_match($this->pattern,$value);
    }

    public function isEditable(){
        return $this->editable;
    }

    public static function editableInteger(int $length): Field{
        return new Field('|^\-?[1-9][0-9]{0,'.($length-1).'}$|',true);
    }

    public static function readOnlyInteger(int $length): Field{
        return new Field('|^\-?[1-9][0-9]{0,'.($length-1).'}$|',false);
    }

    public static function editableIpAddress():Field{
        return new Field('@^([0-9]{1,3}(\.[0-9]{1,3}){3})|(::[0-9]+)$@',true);
    }
    
    public static function readOnlyIpAddress():Field{
        return new Field('@^([0-9]{1,3}(\.[0-9]{1,3}){3})|(::[0-9]+)$@',false);
    }

    public static function editableString(int $length):Field{
        return new Field('|.{0,'.$length.'}$|',true);
    }
    public static function readOnlyString(int $length):Field{
        return new Field('|.{0,'.$length.'}$|',false);
    }

    public static function editableFixedDecimal(int $length,int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'.($length-1).'}\.[0-9]{'.$decimals.'}$|',true);
    }

    public static function readOnlyFixedDecimal(int $length,int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'.($length-1).'}\.[0-9]{'.$decimals.'}$|',false);
    }

    public static function editableMaxDecimal(int $length,int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'.($length-1).'}\.[0-9]{0,'.$decimals.'}$|',true);
    }

    public static function readOnlyMaxDecimal(int $length,int $decimals): Field{
        return new Field('|^\-?[1-9][0-9]{0,'.($length-1).'}\.[0-9]{0,'.$decimals.'}$|',false);
    }

    public static function editableDateTime(): Field{
        return new Field('|[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}|',true);
    }

    public static function readOnlyDateTime(): Field{
        return new Field('|[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}|',false);
    }

    public static function editableDate(): Field{
        return new Field('|[0-9]{4}\-[0-9]{2}\-[0-9]{2}|',true);
    }

    public static function readOnlyDate(): Field{
        return new Field('|[0-9]{4}\-[0-9]{2}\-[0-9]{2}|',false);
    }

    public static function editableTime(): Field{
        return new Field('|[0-9]{2}:[0-9]{2}:[0-9]{2}|',true);
    }

    public static function readOnlyTime(): Field{
        return new Field('|[0-9]{2}:[0-9]{2}:[0-9]{2}|',false);
    }

    public static function editableBit(): Field{
        return new Field('|[01]$|',true);
    }

    public static function readOnlyBit(): Field{
        return new Field('|[01]$|',false);
    }

}