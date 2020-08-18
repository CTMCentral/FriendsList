<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager;

/**
 * Response message for ListServiceRollouts method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.ListServiceRolloutsResponse</code>
 */
class ListServiceRolloutsResponse extends Message
{
    /**
     * The list of rollout resources.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.Rollout rollouts = 1;</code>
     */
    private $rollouts;
    /**
     * The token of the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array                      $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Rollout[]|RepeatedField $rollouts
     *           The list of rollout resources.
     *     @type string                  $next_page_token
     *           The token of the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of rollout resources.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.Rollout rollouts = 1;</code>
     *
     * @return RepeatedField
     */
    public function getRollouts()
    {
        return $this->rollouts;
    }

    /**
     * The list of rollout resources.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.Rollout rollouts = 1;</code>
     *
     * @param Rollout[]|RepeatedField $var
     * @return $this
     */
    public function setRollouts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Rollout::class);
        $this->rollouts = $arr;

        return $this;
    }

    /**
     * The token of the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token of the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

