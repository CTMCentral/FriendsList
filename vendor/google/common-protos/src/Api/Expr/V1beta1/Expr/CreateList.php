<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/expr.proto

namespace Google\Api\Expr\V1beta1\Expr;

use Google\Api\Expr\V1beta1\Expr;
use Google\Api\Expr\V1beta1\Expr_CreateList;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * A list creation expression.
 * Lists may either be homogenous, e.g. `[1, 2, 3]`, or heterogenous, e.g.
 * `dyn([1, 'hello', 2.0])`
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.Expr.CreateList</code>
 */
class CreateList extends Message
{
    /**
     * The elements part of the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr elements = 1;</code>
     */
    private $elements;

    /**
     * Constructor.
     *
     * @param array                   $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Expr[]|RepeatedField $elements
     *           The elements part of the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Expr::initOnce();
        parent::__construct($data);
    }

    /**
     * The elements part of the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr elements = 1;</code>
     *
     * @return RepeatedField
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * The elements part of the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr elements = 1;</code>
     *
     * @param Expr[]|RepeatedField $var
     * @return $this
     */
    public function setElements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Expr::class);
        $this->elements = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateList::class, Expr_CreateList::class);

