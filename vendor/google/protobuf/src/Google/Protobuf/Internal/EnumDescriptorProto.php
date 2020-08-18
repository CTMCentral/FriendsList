<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\EnumDescriptorProto\EnumReservedRange;
use Google\Protobuf\Internal\InputStream;

/**
 * Describes an enum type.
 *
 * Generated from protobuf message <code>google.protobuf.EnumDescriptorProto</code>
 */
class EnumDescriptorProto extends Message
{
    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>optional .google.protobuf.EnumOptions options = 3;</code>
     */
    protected $options = null;
    private $has_name = false;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     */
    private $value;
    private $has_value = false;
    private $has_options = false;
    /**
     * Range of reserved numeric values. Reserved numeric values may not be used
     * by enum values in the same enum declaration. Reserved ranges may not
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumDescriptorProto.EnumReservedRange reserved_range = 4;</code>
     */
    private $reserved_range;
    private $has_reserved_range = false;
    /**
     * Reserved enum value names, which may not be reused. A given name may only
     * be reserved once.
     *
     * Generated from protobuf field <code>repeated string reserved_name = 5;</code>
     */
    private $reserved_name;
    private $has_reserved_name = false;

    /**
     * Constructor.
     *
     * @param array                                                                 $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                                                             $name
     *     @type EnumValueDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $value
     *     @type EnumOptions                                                        $options
     *     @type EnumReservedRange[]|\Google\Protobuf\Internal\RepeatedField        $reserved_range
     *           Range of reserved numeric values. Reserved numeric values may not be used
     *           by enum values in the same enum declaration. Reserved ranges may not
     *           overlap.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField                   $reserved_name
     *           Reserved enum value names, which may not be reused. A given name may only
     *           be reserved once.
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
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     *
     * @param EnumValueDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, EnumValueDescriptorProto::class);
        $this->value = $arr;
        $this->has_value = true;

        return $this;
    }

    public function hasValue()
    {
        return $this->has_value;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.EnumOptions options = 3;</code>
     *
     * @return EnumOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.EnumOptions options = 3;</code>
     *
     * @param EnumOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, EnumOptions::class);
        $this->options = $var;
        $this->has_options = true;

        return $this;
    }

    public function hasOptions()
    {
        return $this->has_options;
    }

    /**
     * Range of reserved numeric values. Reserved numeric values may not be used
     * by enum values in the same enum declaration. Reserved ranges may not
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumDescriptorProto.EnumReservedRange reserved_range = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservedRange()
    {
        return $this->reserved_range;
    }

    /**
     * Range of reserved numeric values. Reserved numeric values may not be used
     * by enum values in the same enum declaration. Reserved ranges may not
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumDescriptorProto.EnumReservedRange reserved_range = 4;</code>
     * @param EnumReservedRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservedRange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, EnumReservedRange::class);
        $this->reserved_range = $arr;
        $this->has_reserved_range = true;

        return $this;
    }

    public function hasReservedRange()
    {
        return $this->has_reserved_range;
    }

    /**
     * Reserved enum value names, which may not be reused. A given name may only
     * be reserved once.
     *
     * Generated from protobuf field <code>repeated string reserved_name = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservedName()
    {
        return $this->reserved_name;
    }

    /**
     * Reserved enum value names, which may not be reused. A given name may only
     * be reserved once.
     *
     * Generated from protobuf field <code>repeated string reserved_name = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservedName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reserved_name = $arr;
        $this->has_reserved_name = true;

        return $this;
    }

    public function hasReservedName()
    {
        return $this->has_reserved_name;
    }

}

