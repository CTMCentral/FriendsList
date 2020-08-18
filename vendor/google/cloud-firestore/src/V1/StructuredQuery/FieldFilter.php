<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery;

use Google\Cloud\Firestore\V1\StructuredQuery_FieldFilter;
use Google\Cloud\Firestore\V1\StructuredQuery_FieldFilter_Operator;
use Google\Cloud\Firestore\V1\StructuredQuery_FieldReference;
use Google\Cloud\Firestore\V1\Value;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Firestore\V1\Query;

/**
 * A filter on a specific field.
 *
 * Generated from protobuf message <code>google.firestore.v1.StructuredQuery.FieldFilter</code>
 */
class FieldFilter extends Message
{
    /**
     * The field to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     */
    private $field = null;
    /**
     * The operator to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldFilter.Operator op = 2;</code>
     */
    private $op = 0;
    /**
     * The value to compare to.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value value = 3;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array             $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type FieldReference $field
     *           The field to filter by.
     *     @type int            $op
     *           The operator to filter by.
     *     @type Value          $value
     *           The value to compare to.
     * }
     */
    public function __construct($data = NULL) {
        Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The field to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     *
     * @return FieldReference
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * The field to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     *
     * @param FieldReference $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkMessage($var, StructuredQuery_FieldReference::class);
        $this->field = $var;

        return $this;
    }

    /**
     * The operator to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldFilter.Operator op = 2;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * The operator to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldFilter.Operator op = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, StructuredQuery_FieldFilter_Operator::class);
        $this->op = $var;

        return $this;
    }

    /**
     * The value to compare to.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value value = 3;</code>
     * @return Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value to compare to.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value value = 3;</code>
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
class_alias(FieldFilter::class, StructuredQuery_FieldFilter::class);

