<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\InputStream;

/**
 * Describes a service.
 *
 * Generated from protobuf message <code>google.protobuf.ServiceDescriptorProto</code>
 */
class ServiceDescriptorProto extends Message
{
    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>optional .google.protobuf.ServiceOptions options = 3;</code>
     */
    protected $options = null;
    private $has_name = false;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.MethodDescriptorProto method = 2;</code>
     */
    private $method;
    private $has_method = false;
    private $has_options = false;

    /**
     * Constructor.
     *
     * @param array                                                              $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                                                          $name
     *     @type MethodDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $method
     *     @type ServiceOptions                                                  $options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
        $this->has_name = true;

        return $this;
    }

    public function hasName()
    {
        return $this->has_name;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.MethodDescriptorProto method = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.MethodDescriptorProto method = 2;</code>
     *
     * @param MethodDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethod($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, MethodDescriptorProto::class);
        $this->method = $arr;
        $this->has_method = true;

        return $this;
    }

    public function hasMethod()
    {
        return $this->has_method;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.ServiceOptions options = 3;</code>
     *
     * @return ServiceOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.ServiceOptions options = 3;</code>
     *
     * @param ServiceOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, ServiceOptions::class);
        $this->options = $var;
        $this->has_options = true;

        return $this;
    }

    public function hasOptions()
    {
        return $this->has_options;
    }

}

