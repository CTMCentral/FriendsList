<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/quota_controller.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Api\Servicecontrol\V1\QuotaController;

/**
 * Response message for the AllocateQuota method.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.AllocateQuotaResponse</code>
 */
class AllocateQuotaResponse extends Message
{
    /**
     * The same operation_id value used in the AllocateQuotaRequest. Used for
     * logging and diagnostics purposes.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     */
    private $operation_id = '';
    /**
     * Indicates the decision of the allocate.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.QuotaError allocate_errors = 2;</code>
     */
    private $allocate_errors;
    /**
     * Quota metrics to indicate the result of allocation. Depending on the
     * request, one or more of the following metrics will be included:
     * 1. Per quota group or per quota metric incremental usage will be specified
     * using the following delta metric :
     *   "serviceruntime.googleapis.com/api/consumer/quota_used_count"
     * 2. The quota limit reached condition will be specified using the following
     * boolean metric :
     *   "serviceruntime.googleapis.com/quota/exceeded"
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValueSet quota_metrics = 3;</code>
     */
    private $quota_metrics;
    /**
     * ID of the actual config used to process the request.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     */
    private $service_config_id = '';

    /**
     * Constructor.
     *
     * @param array                             $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                         $operation_id
     *           The same operation_id value used in the AllocateQuotaRequest. Used for
     *           logging and diagnostics purposes.
     *     @type QuotaError[]|RepeatedField     $allocate_errors
     *           Indicates the decision of the allocate.
     *     @type MetricValueSet[]|RepeatedField $quota_metrics
     *           Quota metrics to indicate the result of allocation. Depending on the
     *           request, one or more of the following metrics will be included:
     *           1. Per quota group or per quota metric incremental usage will be specified
     *           using the following delta metric :
     *             "serviceruntime.googleapis.com/api/consumer/quota_used_count"
     *           2. The quota limit reached condition will be specified using the following
     *           boolean metric :
     *             "serviceruntime.googleapis.com/quota/exceeded"
     *     @type string                                                   $service_config_id
     *           ID of the actual config used to process the request.
     * }
     */
    public function __construct($data = NULL) {
        QuotaController::initOnce();
        parent::__construct($data);
    }

    /**
     * The same operation_id value used in the AllocateQuotaRequest. Used for
     * logging and diagnostics purposes.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @return string
     */
    public function getOperationId()
    {
        return $this->operation_id;
    }

    /**
     * The same operation_id value used in the AllocateQuotaRequest. Used for
     * logging and diagnostics purposes.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_id = $var;

        return $this;
    }

    /**
     * Indicates the decision of the allocate.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.QuotaError allocate_errors = 2;</code>
     *
     * @return RepeatedField
     */
    public function getAllocateErrors()
    {
        return $this->allocate_errors;
    }

    /**
     * Indicates the decision of the allocate.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.QuotaError allocate_errors = 2;</code>
     *
     * @param QuotaError[]|RepeatedField $var
     * @return $this
     */
    public function setAllocateErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, QuotaError::class);
        $this->allocate_errors = $arr;

        return $this;
    }

    /**
     * Quota metrics to indicate the result of allocation. Depending on the
     * request, one or more of the following metrics will be included:
     * 1. Per quota group or per quota metric incremental usage will be specified
     * using the following delta metric :
     *   "serviceruntime.googleapis.com/api/consumer/quota_used_count"
     * 2. The quota limit reached condition will be specified using the following
     * boolean metric :
     *   "serviceruntime.googleapis.com/quota/exceeded"
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValueSet quota_metrics = 3;</code>
     *
     * @return RepeatedField
     */
    public function getQuotaMetrics()
    {
        return $this->quota_metrics;
    }

    /**
     * Quota metrics to indicate the result of allocation. Depending on the
     * request, one or more of the following metrics will be included:
     * 1. Per quota group or per quota metric incremental usage will be specified
     * using the following delta metric :
     *   "serviceruntime.googleapis.com/api/consumer/quota_used_count"
     * 2. The quota limit reached condition will be specified using the following
     * boolean metric :
     *   "serviceruntime.googleapis.com/quota/exceeded"
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValueSet quota_metrics = 3;</code>
     *
     * @param MetricValueSet[]|RepeatedField $var
     * @return $this
     */
    public function setQuotaMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, MetricValueSet::class);
        $this->quota_metrics = $arr;

        return $this;
    }

    /**
     * ID of the actual config used to process the request.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     * @return string
     */
    public function getServiceConfigId()
    {
        return $this->service_config_id;
    }

    /**
     * ID of the actual config used to process the request.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_config_id = $var;

        return $this;
    }

}

