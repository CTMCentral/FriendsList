<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitoring.proto

namespace Google\Api\Monitoring;

use Google\Api\Monitoring_MonitoringDestination;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Api\Monitoring;

/**
 * Configuration of a specific monitoring destination (the producer project
 * or the consumer project).
 *
 * Generated from protobuf message <code>google.api.Monitoring.MonitoringDestination</code>
 */
class MonitoringDestination extends Message
{
    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     */
    private $monitored_resource = '';
    /**
     * Names of the metrics to report to this monitoring destination.
     * Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     */
    private $metrics;

    /**
     * Constructor.
     *
     * @param array                     $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                 $monitored_resource
     *           The monitored resource type. The type must be defined in
     *           [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *     @type string[]|RepeatedField $metrics
     *           Names of the metrics to report to this monitoring destination.
     *           Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     * }
     */
    public function __construct($data = NULL) {
        Monitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @return string
     */
    public function getMonitoredResource()
    {
        return $this->monitored_resource;
    }

    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMonitoredResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->monitored_resource = $var;

        return $this;
    }

    /**
     * Names of the metrics to report to this monitoring destination.
     * Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     *
     * @return RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Names of the metrics to report to this monitoring destination.
     * Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     *
     * @param string[]|RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->metrics = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MonitoringDestination::class, Monitoring_MonitoringDestination::class);

