<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @OA\Schema(
 *  title="UserRoleEnum",
 *  description="User role enum",
 *  @OA\Property(
 *      property="Administrator",
 *      type="integer",
 *      example=0,
 *  ),
 *  @OA\Property(
 *      property="Doctor",
 *      type="integer",
 *      example=1,
 *  ),
 *  @OA\Property(
 *      property="Operator",
 *      type="integer",
 *      example=2
 *  ),
 * )
 *
 * @method static static Administrator()
 * @method static static Doctor()
 * @method static static Operator()
 * @method static static Developer()
 */
final class UserRole extends Enum
{
    const Administrator = 0;
    const Doctor        = 1;
    const Operator      = 2;
    const Developer     = 3;

    public static function getWithoutDeveloper()
    {
        return [
            self::Administrator,
            self::Doctor,
            self::Operator
        ];
    }

    public static function getInstancesWithoutDeveloper()
    {
        return [
            self::getKey(self::Administrator) => [
                self::getInstance(self::Administrator),
            ],
            self::getKey(self::Doctor) => [
                self::getInstance(self::Doctor),
            ],
            self::getKey(self::Operator) => [
                self::getInstance(self::Operator),
            ],
        ];
    }
}
