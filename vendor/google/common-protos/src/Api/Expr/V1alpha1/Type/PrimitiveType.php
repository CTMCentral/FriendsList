<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1\Type;

use Google\Api\Expr\V1alpha1\Type_PrimitiveType;
use UnexpectedValueException;

/**
 * CEL primitive types.
 *
 * Protobuf type <code>google.api.expr.v1alpha1.Type.PrimitiveType</code>
 */
class PrimitiveType
{
    /**
     * Unspecified type.
     *
     * Generated from protobuf enum <code>PRIMITIVE_TYPE_UNSPECIFIED = 0;</code>
     */
    const PRIMITIVE_TYPE_UNSPECIFIED = 0;
    /**
     * Boolean type.
     *
     * Generated from protobuf enum <code>BOOL = 1;</code>
     */
    const BOOL = 1;
    /**
     * Int64 type.
     * Proto-based integer values are widened to int64.
     *
     * Generated from protobuf enum <code>INT64 = 2;</code>
     */
    const INT64 = 2;
    /**
     * Uint64 type.
     * Proto-based unsigned integer values are widened to uint64.
     *
     * Generated from protobuf enum <code>UINT64 = 3;</code>
     */
    const UINT64 = 3;
    /**
     * Double type.
     * Proto-based float values are widened to double values.
     *
     * Generated from protobuf enum <code>DOUBLE = 4;</code>
     */
    const DOUBLE = 4;
    /**
     * String type.
     *
     * Generated from protobuf enum <code>STRING = 5;</code>
     */
    const STRING = 5;
    /**
     * Bytes type.
     *
     * Generated from protobuf enum <code>BYTES = 6;</code>
     */
    const BYTES = 6;

    private static $valueToName = [
        self::PRIMITIVE_TYPE_UNSPECIFIED => 'PRIMITIVE_TYPE_UNSPECIFIED',
        self::BOOL => 'BOOL',
        self::INT64 => 'INT64',
        self::UINT64 => 'UINT64',
        self::DOUBLE => 'DOUBLE',
        self::STRING => 'STRING',
        self::BYTES => 'BYTES',
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
class_alias(PrimitiveType::class, Type_PrimitiveType::class);

