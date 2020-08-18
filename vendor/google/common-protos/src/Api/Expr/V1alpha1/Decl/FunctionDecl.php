<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1\Decl;

use Google\Api\Expr\V1alpha1\Decl\FunctionDecl\Overload;
use Google\Api\Expr\V1alpha1\Decl_FunctionDecl;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Api\Expr\V1Alpha1\Checked;

/**
 * Function declaration specifies one or more overloads which indicate the
 * function's parameter types and return type, and may optionally specify a
 * function definition in terms of CEL expressions.
 * Functions have no observable side-effects (there may be side-effects like
 * logging which are not observable from CEL).
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Decl.FunctionDecl</code>
 */
class FunctionDecl extends Message
{
    /**
     * Required. List of function overloads, must contain at least one overload.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Decl.FunctionDecl.Overload overloads = 1;</code>
     */
    private $overloads;

    /**
     * Constructor.
     *
     * @param array                       $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Overload[]|RepeatedField $overloads
     *           Required. List of function overloads, must contain at least one overload.
     * }
     */
    public function __construct($data = NULL) {
        Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. List of function overloads, must contain at least one overload.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Decl.FunctionDecl.Overload overloads = 1;</code>
     *
     * @return RepeatedField
     */
    public function getOverloads()
    {
        return $this->overloads;
    }

    /**
     * Required. List of function overloads, must contain at least one overload.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Decl.FunctionDecl.Overload overloads = 1;</code>
     *
     * @param Overload[]|RepeatedField $var
     * @return $this
     */
    public function setOverloads($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Overload::class);
        $this->overloads = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FunctionDecl::class, Decl_FunctionDecl::class);

