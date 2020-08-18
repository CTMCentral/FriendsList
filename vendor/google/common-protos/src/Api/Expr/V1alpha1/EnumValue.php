<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/value.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * An enum value.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.EnumValue</code>
 */
class EnumValue extends Message
{
    /**
     * The fully qualified name of the enum type.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * The value of the enum.
     *
     * Generated from protobuf field <code>int32 value = 2;</code>
     */
    private $value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           The fully qualified name of the enum type.
     *     @type int $value
     *           The value of the enum.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Value::initOnce();
        parent::__construct($data);
    }

    /**
     * The fully qualified name of the enum type.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The fully qualified name of the enum type.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The value of the enum.
     *
     * Generated from protobuf field <code>int32 value = 2;</code>
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value of the enum.
     *
     * Generated from protobuf field <code>int32 value = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->value = $var;

        return $this;
    }

}

