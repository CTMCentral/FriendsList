<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Api\Service;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager;

/**
 * Request message for CreateServiceConfig method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.CreateServiceConfigRequest</code>
 */
class CreateServiceConfigRequest extends Message
{
    /**
     * Required. The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_name = '';
    /**
     * Required. The service configuration resource.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Required. The name of the service.  See the [overview](/service-management/overview)
     *           for naming requirements.  For example: `example.googleapis.com`.
     *     @type Service $service_config
     *           Required. The service configuration resource.
     * }
     */
    public function __construct($data = NULL) {
        Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Required. The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Required. The service configuration resource.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Service
     */
    public function getServiceConfig()
    {
        return $this->service_config;
    }

    /**
     * Required. The service configuration resource.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param Service $var
     * @return $this
     */
    public function setServiceConfig($var)
    {
        GPBUtil::checkMessage($var, Service::class);
        $this->service_config = $var;

        return $this;
    }

}

