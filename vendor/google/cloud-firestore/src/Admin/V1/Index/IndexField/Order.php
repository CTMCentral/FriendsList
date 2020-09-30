<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/adminSubCommand/v1/index.proto

namespace Google\Cloud\Firestore\Admin\V1\Index\IndexField;

use Google\Cloud\Firestore\Admin\V1\Index_IndexField_Order;
use UnexpectedValueException;

/**
 * The supported orderings.
 *
 * Protobuf type <code>google.firestore.adminSubCommand.v1.Index.IndexField.Order</code>
 */
class Order
{
    /**
     * The ordering is unspecified. Not a valid option.
     *
     * Generated from protobuf enum <code>ORDER_UNSPECIFIED = 0;</code>
     */
    const ORDER_UNSPECIFIED = 0;
    /**
     * The field is ordered by ascending field value.
     *
     * Generated from protobuf enum <code>ASCENDING = 1;</code>
     */
    const ASCENDING = 1;
    /**
     * The field is ordered by descending field value.
     *
     * Generated from protobuf enum <code>DESCENDING = 2;</code>
     */
    const DESCENDING = 2;

    private static $valueToName = [
        self::ORDER_UNSPECIFIED => 'ORDER_UNSPECIFIED',
        self::ASCENDING => 'ASCENDING',
        self::DESCENDING => 'DESCENDING',
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
class_alias(Order::class, Index_IndexField_Order::class);

