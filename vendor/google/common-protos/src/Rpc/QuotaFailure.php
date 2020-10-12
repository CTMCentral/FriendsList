<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use Google\Rpc\QuotaFailure\Violation;
use GPBMetadata\Google\Rpc\ErrorDetails;

/**
 * Describes how a quota check failed.
 * For example if a daily limit was exceeded for the calling project,
 * a service could respond with a QuotaFailure detail containing the project
 * id and the description of the quota limit that was exceeded.  If the
 * calling project hasn't enabled the service in the developer console, then
 * a service could respond with the project id and set `service_disabled`
 * to true.
 * Also see RetryInfo and Help types for other details about handling a
 * quota failure.
 *
 * Generated from protobuf message <code>google.rpc.QuotaFailure</code>
 */
class QuotaFailure extends Message
{
    /**
     * Describes all quota violations.
     *
     * Generated from protobuf field <code>repeated .google.rpc.QuotaFailure.Violation violations = 1;</code>
     */
    private $violations;

    /**
     * Constructor.
     *
     * @param array                        $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Violation[]|RepeatedField $violations
     *           Describes all quota violations.
     * }
     */
    public function __construct($data = NULL) {
        ErrorDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes all quota violations.
     *
     * Generated from protobuf field <code>repeated .google.rpc.QuotaFailure.Violation violations = 1;</code>
     *
     * @return RepeatedField
     */
    public function getViolations()
    {
        return $this->violations;
    }

    /**
     * Describes all quota violations.
     *
     * Generated from protobuf field <code>repeated .google.rpc.QuotaFailure.Violation violations = 1;</code>
     *
     * @param Violation[]|RepeatedField $var
     * @return $this
     */
    public function setViolations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Violation::class);
        $this->violations = $arr;

        return $this;
    }

}
