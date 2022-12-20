<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @OA\Schema(
 *  title="PatientGenderEnum",
 *  description="Patient Gender enum",
 *  @OA\Property(
 *      property="Male",
 *      type="integer",
 *      example=0,
 *  ),
 *  @OA\Property(
 *      property="Female",
 *      type="integer",
 *      example=1,
 *  ),
 * )
 *
 * @method static static Male()
 * @method static static Female()
 */
final class PatientGender extends Enum
{
    const Male   = 0;
    const Female = 1;
}
