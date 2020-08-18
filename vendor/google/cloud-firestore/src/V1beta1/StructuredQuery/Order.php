<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/query.proto

namespace Google\Cloud\Firestore\V1beta1\StructuredQuery;

use Google\Cloud\Firestore\V1beta1\StructuredQuery_Direction;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_FieldReference;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_Order;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Firestore\V1Beta1\Query;

/**
 * An order on a field.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.StructuredQuery.Order</code>
 */
class Order extends Message
{
    /**
     * The field to order by.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.FieldReference field = 1;</code>
     */
    private $field = null;
    /**
     * The direction to order by. Defaults to `ASCENDING`.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Direction direction = 2;</code>
     */
    private $direction = 0;

    /**
     * Constructor.
     *
     * @param array             $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type FieldReference $field
     *           The field to order by.
     *     @type int            $direction
     *           The direction to order by. Defaults to `ASCENDING`.
     * }
     */
    public function __construct($data = NULL) {
        Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The field to order by.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.FieldReference field = 1;</code>
     *
     * @return FieldReference
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * The field to order by.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.FieldReference field = 1;</code>
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
     * The direction to order by. Defaults to `ASCENDING`.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Direction direction = 2;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * The direction to order by. Defaults to `ASCENDING`.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Direction direction = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, StructuredQuery_Direction::class);
        $this->direction = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Order::class, StructuredQuery_Order::class);

