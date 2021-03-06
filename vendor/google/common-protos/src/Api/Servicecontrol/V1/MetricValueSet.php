<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/metric_value.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Represents a set of metric values in the same metric.
 * Each metric value in the set should have a unique combination of start time,
 * end time, and label values.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.MetricValueSet</code>
 */
class MetricValueSet extends Message
{
    /**
     * The metric name defined in the service configuration.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     */
    private $metric_name = '';
    /**
     * The values in this metric.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     */
    private $metric_values;

    /**
     * Constructor.
     *
     * @param array                          $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                      $metric_name
     *           The metric name defined in the service configuration.
     *     @type MetricValue[]|RepeatedField $metric_values
     *           The values in this metric.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\MetricValue::initOnce();
        parent::__construct($data);
    }

    /**
     * The metric name defined in the service configuration.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @return string
     */
    public function getMetricName()
    {
        return $this->metric_name;
    }

    /**
     * The metric name defined in the service configuration.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;

        return $this;
    }

    /**
     * The values in this metric.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     *
     * @return RepeatedField
     */
    public function getMetricValues()
    {
        return $this->metric_values;
    }

    /**
     * The values in this metric.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     *
     * @param MetricValue[]|RepeatedField $var
     * @return $this
     */
    public function setMetricValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, MetricValue::class);
        $this->metric_values = $arr;

        return $this;
    }

}

