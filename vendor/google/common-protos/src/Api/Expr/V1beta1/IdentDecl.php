<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/decl.proto

namespace Google\Api\Expr\V1beta1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * An identifier declaration.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.IdentDecl</code>
 */
class IdentDecl extends Message
{
    /**
     * Optional type of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.DeclType type = 3;</code>
     */
    private $type = null;
    /**
     * Optional value of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr value = 4;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array       $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type DeclType $type
     *           Optional type of the identifier.
     *     @type Expr     $value
     *           Optional value of the identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Decl::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional type of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.DeclType type = 3;</code>
     *
     * @return DeclType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional type of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.DeclType type = 3;</code>
     *
     * @param DeclType $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, DeclType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional value of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr value = 4;</code>
     *
     * @return Expr
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Optional value of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr value = 4;</code>
     *
     * @param Expr $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, Expr::class);
        $this->value = $var;

        return $this;
    }

}

