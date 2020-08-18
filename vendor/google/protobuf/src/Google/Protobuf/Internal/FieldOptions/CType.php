<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal\FieldOptions;

use Google\Protobuf\Internal\FieldOptions_CType;
use UnexpectedValueException;

/**
 * Protobuf type <code>google.protobuf.FieldOptions.CType</code>
 */
class CType
{
    /**
     * Default mode.
     *
     * Generated from protobuf enum <code>STRING = 0;</code>
     */
    const STRING = 0;
    /**
     * Generated from protobuf enum <code>CORD = 1;</code>
     */
    const CORD = 1;
    /**
     * Generated from protobuf enum <code>STRING_PIECE = 2;</code>
     */
    const STRING_PIECE = 2;

    private static $valueToName = [
        self::STRING => 'STRING',
        self::CORD => 'CORD',
        self::STRING_PIECE => 'STRING_PIECE',
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
class_alias(CType::class, FieldOptions_CType::class);

