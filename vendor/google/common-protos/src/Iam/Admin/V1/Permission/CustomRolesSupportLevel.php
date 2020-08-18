<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1\Permission;

use Google\Iam\Admin\V1\Permission_CustomRolesSupportLevel;
use UnexpectedValueException;

/**
 * The state of the permission with regards to custom roles.
 *
 * Protobuf type <code>google.iam.admin.v1.Permission.CustomRolesSupportLevel</code>
 */
class CustomRolesSupportLevel
{
    /**
     * Permission is fully supported for custom role use.
     *
     * Generated from protobuf enum <code>SUPPORTED = 0;</code>
     */
    const SUPPORTED = 0;
    /**
     * Permission is being tested to check custom role compatibility.
     *
     * Generated from protobuf enum <code>TESTING = 1;</code>
     */
    const TESTING = 1;
    /**
     * Permission is not supported for custom role use.
     *
     * Generated from protobuf enum <code>NOT_SUPPORTED = 2;</code>
     */
    const NOT_SUPPORTED = 2;

    private static $valueToName = [
        self::SUPPORTED => 'SUPPORTED',
        self::TESTING => 'TESTING',
        self::NOT_SUPPORTED => 'NOT_SUPPORTED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomRolesSupportLevel::class, Permission_CustomRolesSupportLevel::class);

