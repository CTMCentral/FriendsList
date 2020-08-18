<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/context.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * A context rule provides information about the context for an individual API
 * element.
 *
 * Generated from protobuf message <code>google.api.ContextRule</code>
 */
class ContextRule extends Message
{
    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    private $selector = '';
    /**
     * A list of full type names of requested contexts.
     *
     * Generated from protobuf field <code>repeated string requested = 2;</code>
     */
    private $requested;
    /**
     * A list of full type names of provided contexts.
     *
     * Generated from protobuf field <code>repeated string provided = 3;</code>
     */
    private $provided;

    /**
     * Constructor.
     *
     * @param array                     $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                 $selector
     *           Selects the methods to which this rule applies.
     *           Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *     @type string[]|RepeatedField $requested
     *           A list of full type names of requested contexts.
     *     @type string[]|RepeatedField $provided
     *           A list of full type names of provided contexts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Context::initOnce();
        parent::__construct($data);
    }

    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;

        return $this;
    }

    /**
     * A list of full type names of requested contexts.
     *
     * Generated from protobuf field <code>repeated string requested = 2;</code>
     *
     * @return RepeatedField
     */
    public function getRequested()
    {
        return $this->requested;
    }

    /**
     * A list of full type names of requested contexts.
     *
     * Generated from protobuf field <code>repeated string requested = 2;</code>
     *
     * @param string[]|RepeatedField $var
     * @return $this
     */
    public function setRequested($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->requested = $arr;

        return $this;
    }

    /**
     * A list of full type names of provided contexts.
     *
     * Generated from protobuf field <code>repeated string provided = 3;</code>
     *
     * @return RepeatedField
     */
    public function getProvided()
    {
        return $this->provided;
    }

    /**
     * A list of full type names of provided contexts.
     *
     * Generated from protobuf field <code>repeated string provided = 3;</code>
     *
     * @param string[]|RepeatedField $var
     * @return $this
     */
    public function setProvided($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->provided = $arr;

        return $this;
    }

}

