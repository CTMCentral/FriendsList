<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/quota_controller.proto

namespace Google\Api\Servicecontrol\V1\QuotaOperation;

use Google\Api\Servicecontrol\V1\QuotaOperation_QuotaMode;
use UnexpectedValueException;

/**
 * Supported quota modes.
 *
 * Protobuf type <code>google.api.servicecontrol.v1.QuotaOperation.QuotaMode</code>
 */
class QuotaMode
{
    /**
     * Guard against implicit default. Must not be used.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * For AllocateQuota request, allocates quota for the amount specified in
     * the service configuration or specified using the quota metrics. If the
     * amount is higher than the available quota, allocation error will be
     * returned and no quota will be allocated.
     *
     * Generated from protobuf enum <code>NORMAL = 1;</code>
     */
    const NORMAL = 1;
    /**
     * The operation allocates quota for the amount specified in the service
     * configuration or specified using the quota metrics. If the amount is
     * higher than the available quota, request does not fail but all available
     * quota will be allocated.
     *
     * Generated from protobuf enum <code>BEST_EFFORT = 2;</code>
     */
    const BEST_EFFORT = 2;
    /**
     * For AllocateQuota request, only checks if there is enough quota
     * available and does not change the available quota. No lock is placed on
     * the available quota either.
     *
     * Generated from protobuf enum <code>CHECK_ONLY = 3;</code>
     */
    const CHECK_ONLY = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::NORMAL => 'NORMAL',
        self::BEST_EFFORT => 'BEST_EFFORT',
        self::CHECK_ONLY => 'CHECK_ONLY',
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
class_alias(QuotaMode::class, QuotaOperation_QuotaMode::class);
