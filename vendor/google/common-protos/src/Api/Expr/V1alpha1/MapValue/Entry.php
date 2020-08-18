<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/value.proto

namespace Google\Api\Expr\V1alpha1\MapValue;

use Google\Api\Expr\V1alpha1\MapValue_Entry;
use Google\Api\Expr\V1alpha1\Value;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * An entry in the map.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.MapValue.Entry</code>
 */
class Entry extends Message
{
    /**
     * The key.
     * Must be unique with in the map.
     * Currently only boolean, int, uint, and string values can be keys.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Value key = 1;</code>
     */
    private $key = null;
    /**
     * The value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Value value = 2;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Value $key
     *           The key.
     *           Must be unique with in the map.
     *           Currently only boolean, int, uint, and string values can be keys.
     *     @type Value $value
     *           The value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Value::initOnce();
        parent::__construct($data);
    }

    /**
     * The key.
     * Must be unique with in the map.
     * Currently only boolean, int, uint, and string values can be keys.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Value key = 1;</code>
     * @return Value
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The key.
     * Must be unique with in the map.
     * Currently only boolean, int, uint, and string values can be keys.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Value key = 1;</code>
     * @param Value $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, Value::class);
        $this->key = $var;

        return $this;
    }

    /**
     * The value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Value value = 2;</code>
     * @return Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Value value = 2;</code>
     * @param Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, Value::class);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Entry::class, MapValue_Entry::class);

