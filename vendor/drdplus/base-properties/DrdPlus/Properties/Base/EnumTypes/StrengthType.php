<?php
declare(strict_types=1);/** be strict for parameter types, https://www.quora.com/Are-strict_types-in-PHP-7-not-a-bad-idea */
namespace DrdPlus\Properties\Base\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;
use DrdPlus\Codes\Properties\PropertyCode;

class StrengthType extends IntegerEnumType
{
    public const STRENGTH = PropertyCode::STRENGTH;

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::STRENGTH;
    }
}