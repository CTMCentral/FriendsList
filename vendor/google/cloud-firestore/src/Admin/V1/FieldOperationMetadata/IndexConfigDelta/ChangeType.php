<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/adminSubCommand/v1/operation.proto

namespace Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\IndexConfigDelta;

use Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata_IndexConfigDelta_ChangeType;
use UnexpectedValueException;

/**
 * Specifies how the index is changing.
 *
 * Protobuf type <code>google.firestore.adminSubCommand.v1.FieldOperationMetadata.IndexConfigDelta.ChangeType</code>
 */
class ChangeType
{
    /**
     * The type of change is not specified or known.
     *
     * Generated from protobuf enum <code>CHANGE_TYPE_UNSPECIFIED = 0;</code>
     */
    const CHANGE_TYPE_UNSPECIFIED = 0;
    /**
     * The single field index is being added.
     *
     * Generated from protobuf enum <code>ADD = 1;</code>
     */
    const ADD = 1;
    /**
     * The single field index is being removed.
     *
     * Generated from protobuf enum <code>REMOVE = 2;</code>
     */
    const REMOVE = 2;

    private static $valueToName = [
        self::CHANGE_TYPE_UNSPECIFIED => 'CHANGE_TYPE_UNSPECIFIED',
        self::ADD => 'ADD',
        self::REMOVE => 'REMOVE',
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
class_alias(ChangeType::class, FieldOperationMetadata_IndexConfigDelta_ChangeType::class);

