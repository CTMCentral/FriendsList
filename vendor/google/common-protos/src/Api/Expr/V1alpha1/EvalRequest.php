<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/conformance_service.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Api\Expr\V1Alpha1\ConformanceService;

/**
 * Request message for the Eval method.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.EvalRequest</code>
 */
class EvalRequest extends Message
{
    protected $expr_kind;
    /**
     * Bindings for the external variables.  The types SHOULD be compatible
     * with the type environment in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     *
     * Generated from protobuf field <code>map<string, .google.api.expr.v1alpha1.ExprValue> bindings = 3;</code>
     */
    private $bindings;
    /**
     * SHOULD be the same container as used in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     *
     * Generated from protobuf field <code>string container = 4;</code>
     */
    private $container = '';

    /**
     * Constructor.
     *
     * @param array             $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type ParsedExpr     $parsed_expr
     *           Evaluate based on the parsed representation.
     *     @type CheckedExpr    $checked_expr
     *           Evaluate based on the checked representation.
     *     @type array|MapField $bindings
     *           Bindings for the external variables.  The types SHOULD be compatible
     *           with the type environment in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     *     @type string         $container
     *           SHOULD be the same container as used in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     * }
     */
    public function __construct($data = NULL) {
        ConformanceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Evaluate based on the parsed representation.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ParsedExpr parsed_expr = 1;</code>
     *
     * @return ParsedExpr
     */
    public function getParsedExpr()
    {
        return $this->readOneof(1);
    }

    /**
     * Evaluate based on the parsed representation.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ParsedExpr parsed_expr = 1;</code>
     *
     * @param ParsedExpr $var
     * @return $this
     */
    public function setParsedExpr($var)
    {
        GPBUtil::checkMessage($var, ParsedExpr::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Evaluate based on the checked representation.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.CheckedExpr checked_expr = 2;</code>
     *
     * @return CheckedExpr
     */
    public function getCheckedExpr()
    {
        return $this->readOneof(2);
    }

    /**
     * Evaluate based on the checked representation.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.CheckedExpr checked_expr = 2;</code>
     *
     * @param CheckedExpr $var
     * @return $this
     */
    public function setCheckedExpr($var)
    {
        GPBUtil::checkMessage($var, CheckedExpr::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Bindings for the external variables.  The types SHOULD be compatible
     * with the type environment in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     *
     * Generated from protobuf field <code>map<string, .google.api.expr.v1alpha1.ExprValue> bindings = 3;</code>
     * @return MapField
     */
    public function getBindings()
    {
        return $this->bindings;
    }

    /**
     * Bindings for the external variables.  The types SHOULD be compatible
     * with the type environment in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     *
     * Generated from protobuf field <code>map<string, .google.api.expr.v1alpha1.ExprValue> bindings = 3;</code>
     *
     * @param array|MapField $var
     * @return $this
     */
    public function setBindings($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING, GPBType::MESSAGE, ExprValue::class);
        $this->bindings = $arr;

        return $this;
    }

    /**
     * SHOULD be the same container as used in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     *
     * Generated from protobuf field <code>string container = 4;</code>
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * SHOULD be the same container as used in [CheckRequest][google.api.expr.v1alpha1.CheckRequest], if checked.
     *
     * Generated from protobuf field <code>string container = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContainer($var)
    {
        GPBUtil::checkString($var, True);
        $this->container = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExprKind()
    {
        return $this->whichOneof("expr_kind");
    }

}

