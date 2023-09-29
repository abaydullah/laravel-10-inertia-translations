<?php
namespace App\Lang;
use phpDocumentor\Reflection\Types\Self_;

enum Lang: string
{

    case EN = 'en';
    case BN = 'bn';

    public function label(): string
    {
        return match ($this){
          self::EN => 'English',
          self::BN => 'Bangla'
        };
    }
}

