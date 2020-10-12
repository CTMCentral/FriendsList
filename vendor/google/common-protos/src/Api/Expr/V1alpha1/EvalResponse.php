<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/conformance_service.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use Google\Rpc\Status;
use GPBMetadata\Google\Api\Expr\V1Alpha1\ConformanceService;

/**
 * Response message for the Eval method.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.EvalResponse</code>
 */
class EvalResponse extends Message
{
    /**
     * The execution result, or unset if execution couldn't start.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ExprValue result = 1;</code>
     */
    private $result = null;
    /**
     * Any number of issues with [StatusDetails][] as the details.
     * Note that CEL execution errors are reified into [ExprValue][google.api.expr.v1alpha1.ExprValue].
     * Nevertheless, we'll allow out-of-band issues to be raised,
     * which also makes the replies more regular.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status issues = 2;</code>
     */
    private $issues;

    /**
     * Constructor.
     *
     * @param array                     $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type ExprValue              $result
     *           The execution result, or unset if execution couldn't start.
     *     @type Status[]|RepeatedField $issues
     *           Any number of issues with [StatusDetails][] as the details.
     *           Note that CEL execution errors are reified into [ExprValue][google.api.expr.v1alpha1.ExprValue].
     *           Nevertheless, we'll allow out-of-band issues to be raised,
     *           which also makes the replies more regular.
     * }
     */
    public function __construct($data = NULL) {
        ConformanceService::initOnce();
        parent::__construct($data);
    }

    /**
     * The execution result, or unset if execution couldn't start.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ExprValue result = 1;</code>
     *
     * @return ExprValue
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The execution result, or unset if execution couldn't start.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ExprValue result = 1;</code>
     *
     * @param ExprValue $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, ExprValue::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Any number of issues with [StatusDetails][] as the details.
     * Note that CEL execution errors are reified into [ExprValue][google.api.expr.v1alpha1.ExprValue].
     * Nevertheless, we'll allow out-of-band issues to be raised,
     * which also makes the replies more regular.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status issues = 2;</code>
     *
     * @return RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Any number of issues with [StatusDetails][] as the details.
     * Note that CEL execution errors are reified into [ExprValue][google.api.expr.v1alpha1.ExprValue].
     * Nevertheless, we'll allow out-of-band issues to be raised,
     * which also makes the replies more regular.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status issues = 2;</code>
     *
     * @param Status[]|RepeatedField $var
     * @return $this
     */
    public function setIssues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Status::class);
        $this->issues = $arr;

        return $this;
    }

}
