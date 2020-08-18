<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery\FieldFilter;

use Google\Cloud\Firestore\V1\StructuredQuery_FieldFilter_Operator;
use UnexpectedValueException;

/**
 * A field filter operator.
 *
 * Protobuf type <code>google.firestore.v1.StructuredQuery.FieldFilter.Operator</code>
 */
class Operator
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * The given `field` is less than the given `value`.
     * Requires:
     * * That `field` come first in `order_by`.
     *
     * Generated from protobuf enum <code>LESS_THAN = 1;</code>
     */
    const LESS_THAN = 1;
    /**
     * The given `field` is less than or equal to the given `value`.
     * Requires:
     * * That `field` come first in `order_by`.
     *
     * Generated from protobuf enum <code>LESS_THAN_OR_EQUAL = 2;</code>
     */
    const LESS_THAN_OR_EQUAL = 2;
    /**
     * The given `field` is greater than the given `value`.
     * Requires:
     * * That `field` come first in `order_by`.
     *
     * Generated from protobuf enum <code>GREATER_THAN = 3;</code>
     */
    const GREATER_THAN = 3;
    /**
     * The given `field` is greater than or equal to the given `value`.
     * Requires:
     * * That `field` come first in `order_by`.
     *
     * Generated from protobuf enum <code>GREATER_THAN_OR_EQUAL = 4;</code>
     */
    const GREATER_THAN_OR_EQUAL = 4;
    /**
     * The given `field` is equal to the given `value`.
     *
     * Generated from protobuf enum <code>EQUAL = 5;</code>
     */
    const EQUAL = 5;
    /**
     * The given `field` is an array that contains the given `value`.
     *
     * Generated from protobuf enum <code>ARRAY_CONTAINS = 7;</code>
     */
    const ARRAY_CONTAINS = 7;
    /**
     * The given `field` is equal to at least one value in the given array.
     * Requires:
     * * That `value` is a non-empty `ArrayValue` with at most 10 values.
     * * No other `IN`, `ARRAY_CONTAINS_ANY`, or `NOT_IN`.
     *
     * Generated from protobuf enum <code>IN = 8;</code>
     */
    const IN = 8;
    /**
     * The given `field` is an array that contains any of the values in the
     * given array.
     * Requires:
     * * That `value` is a non-empty `ArrayValue` with at most 10 values.
     * * No other `IN`, `ARRAY_CONTAINS_ANY`, or `NOT_IN`.
     *
     * Generated from protobuf enum <code>ARRAY_CONTAINS_ANY = 9;</code>
     */
    const ARRAY_CONTAINS_ANY = 9;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::LESS_THAN => 'LESS_THAN',
        self::LESS_THAN_OR_EQUAL => 'LESS_THAN_OR_EQUAL',
        self::GREATER_THAN => 'GREATER_THAN',
        self::GREATER_THAN_OR_EQUAL => 'GREATER_THAN_OR_EQUAL',
        self::EQUAL => 'EQUAL',
        self::ARRAY_CONTAINS => 'ARRAY_CONTAINS',
        self::IN => 'IN',
        self::ARRAY_CONTAINS_ANY => 'ARRAY_CONTAINS_ANY',
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
class_alias(Operator::class, StructuredQuery_FieldFilter_Operator::class);

