<?php

namespace App\Domain\Users\Models;

use Carbon\Carbon;
use Spatie\Permission\Models\Permission as BasePermission;

/**
 * Class Permission
 *
 * @package App\Domain\Users\Models
 *
 * @property int    $id
 * @property string $name
 * @property string $guard_name
 * @property int    $module_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Permission extends BasePermission
{
}
