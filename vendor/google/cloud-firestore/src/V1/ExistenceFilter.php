<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * A digest of all the documents that match a given target.
 *
 * Generated from protobuf message <code>google.firestore.v1.ExistenceFilter</code>
 */
class ExistenceFilter extends Message
{
    /**
     * The target ID to which this filter applies.
     *
     * Generated from protobuf field <code>int32 target_id = 1;</code>
     */
    private $target_id = 0;
    /**
     * The total count of documents that match [target_id][google.firestore.v1.ExistenceFilter.target_id].
     * If different from the count of documents in the client that match, the
     * client must manually determine which documents no longer match the target.
     *
     * Generated from protobuf field <code>int32 count = 2;</code>
     */
    private $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $target_id
     *           The target ID to which this filter applies.
     *     @type int $count
     *           The total count of documents that match [target_id][google.firestore.v1.ExistenceFilter.target_id].
     *           If different from the count of documents in the client that match, the
     *           client must manually determine which documents no longer match the target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Write::initOnce();
        parent::__construct($data);
    }

    /**
     * The target ID to which this filter applies.
     *
     * Generated from protobuf field <code>int32 target_id = 1;</code>
     * @return int
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * The target ID to which this filter applies.
     *
     * Generated from protobuf field <code>int32 target_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_id = $var;

        return $this;
    }

    /**
     * The total count of documents that match [target_id][google.firestore.v1.ExistenceFilter.target_id].
     * If different from the count of documents in the client that match, the
     * client must manually determine which documents no longer match the target.
     *
     * Generated from protobuf field <code>int32 count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * The total count of documents that match [target_id][google.firestore.v1.ExistenceFilter.target_id].
     * If different from the count of documents in the client that match, the
     * client must manually determine which documents no longer match the target.
     *
     * Generated from protobuf field <code>int32 count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

}

