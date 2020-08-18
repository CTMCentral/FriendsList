<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/decl.proto

namespace Google\Api\Expr\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * A function declaration.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.FunctionDecl</code>
 */
class FunctionDecl extends Message
{
    /**
     * The function arguments.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.IdentDecl args = 1;</code>
     */
    private $args;
    /**
     * Optional declared return type.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.DeclType return_type = 2;</code>
     */
    private $return_type = null;
    /**
     * If the first argument of the function is the receiver.
     *
     * Generated from protobuf field <code>bool receiver_function = 3;</code>
     */
    private $receiver_function = false;

    /**
     * Constructor.
     *
     * @param array                        $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type IdentDecl[]|RepeatedField $args
     *           The function arguments.
     *     @type DeclType                  $return_type
     *           Optional declared return type.
     *     @type bool                      $receiver_function
     *           If the first argument of the function is the receiver.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Decl::initOnce();
        parent::__construct($data);
    }

    /**
     * The function arguments.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.IdentDecl args = 1;</code>
     *
     * @return RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * The function arguments.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.IdentDecl args = 1;</code>
     *
     * @param IdentDecl[]|RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, IdentDecl::class);
        $this->args = $arr;

        return $this;
    }

    /**
     * Optional declared return type.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.DeclType return_type = 2;</code>
     *
     * @return DeclType
     */
    public function getReturnType()
    {
        return $this->return_type;
    }

    /**
     * Optional declared return type.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.DeclType return_type = 2;</code>
     *
     * @param DeclType $var
     * @return $this
     */
    public function setReturnType($var)
    {
        GPBUtil::checkMessage($var, DeclType::class);
        $this->return_type = $var;

        return $this;
    }

    /**
     * If the first argument of the function is the receiver.
     *
     * Generated from protobuf field <code>bool receiver_function = 3;</code>
     * @return bool
     */
    public function getReceiverFunction()
    {
        return $this->receiver_function;
    }

    /**
     * If the first argument of the function is the receiver.
     *
     * Generated from protobuf field <code>bool receiver_function = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReceiverFunction($var)
    {
        GPBUtil::checkBool($var);
        $this->receiver_function = $var;

        return $this;
    }

}

