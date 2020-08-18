<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Firestore\V1Beta1\Firestore;

/**
 * The response from [Firestore.ListCollectionIds][google.firestore.v1beta1.Firestore.ListCollectionIds].
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.ListCollectionIdsResponse</code>
 */
class ListCollectionIdsResponse extends Message
{
    /**
     * The collection ids.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 1;</code>
     */
    private $collection_ids;
    /**
     * A page token that may be used to continue the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array                     $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|RepeatedField $collection_ids
     *           The collection ids.
     *     @type string                 $next_page_token
     *           A page token that may be used to continue the list.
     * }
     */
    public function __construct($data = NULL) {
        Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * The collection ids.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 1;</code>
     *
     * @return RepeatedField
     */
    public function getCollectionIds()
    {
        return $this->collection_ids;
    }

    /**
     * The collection ids.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 1;</code>
     *
     * @param string[]|RepeatedField $var
     * @return $this
     */
    public function setCollectionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->collection_ids = $arr;

        return $this;
    }

    /**
     * A page token that may be used to continue the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A page token that may be used to continue the list.
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

