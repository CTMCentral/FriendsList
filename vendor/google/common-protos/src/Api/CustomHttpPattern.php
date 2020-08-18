<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/http.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * A custom pattern is used for defining custom HTTP verb.
 *
 * Generated from protobuf message <code>google.api.CustomHttpPattern</code>
 */
class CustomHttpPattern extends Message
{
    /**
     * The name of this custom HTTP verb.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * The path matched by this custom verb.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    private $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           The name of this custom HTTP verb.
     *     @type string $path
     *           The path matched by this custom verb.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Http::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of this custom HTTP verb.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The name of this custom HTTP verb.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The path matched by this custom verb.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path matched by this custom verb.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

