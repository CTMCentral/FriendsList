<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * A [Document][google.firestore.v1.Document] has changed.
 * May be the result of multiple [writes][google.firestore.v1.Write], including deletes, that
 * ultimately resulted in a new value for the [Document][google.firestore.v1.Document].
 * Multiple [DocumentChange][google.firestore.v1.DocumentChange] messages may be returned for the same logical
 * change, if multiple targets are affected.
 *
 * Generated from protobuf message <code>google.firestore.v1.DocumentChange</code>
 */
class DocumentChange extends Message
{
    /**
     * The new state of the [Document][google.firestore.v1.Document].
     * If `mask` is set, contains only fields that were updated or added.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document document = 1;</code>
     */
    private $document = null;
    /**
     * A set of target IDs of targets that match this document.
     *
     * Generated from protobuf field <code>repeated int32 target_ids = 5;</code>
     */
    private $target_ids;
    /**
     * A set of target IDs for targets that no longer match this document.
     *
     * Generated from protobuf field <code>repeated int32 removed_target_ids = 6;</code>
     */
    private $removed_target_ids;

    /**
     * Constructor.
     *
     * @param array                  $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Document            $document
     *           The new state of the [Document][google.firestore.v1.Document].
     *           If `mask` is set, contains only fields that were updated or added.
     *     @type int[]|RepeatedField $target_ids
     *           A set of target IDs of targets that match this document.
     *     @type int[]|RepeatedField $removed_target_ids
     *           A set of target IDs for targets that no longer match this document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Write::initOnce();
        parent::__construct($data);
    }

    /**
     * The new state of the [Document][google.firestore.v1.Document].
     * If `mask` is set, contains only fields that were updated or added.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document document = 1;</code>
     *
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * The new state of the [Document][google.firestore.v1.Document].
     * If `mask` is set, contains only fields that were updated or added.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Document document = 1;</code>
     *
     * @param Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * A set of target IDs of targets that match this document.
     *
     * Generated from protobuf field <code>repeated int32 target_ids = 5;</code>
     *
     * @return RepeatedField
     */
    public function getTargetIds()
    {
        return $this->target_ids;
    }

    /**
     * A set of target IDs of targets that match this document.
     *
     * Generated from protobuf field <code>repeated int32 target_ids = 5;</code>
     *
     * @param int[]|RepeatedField $var
     * @return $this
     */
    public function setTargetIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->target_ids = $arr;

        return $this;
    }

    /**
     * A set of target IDs for targets that no longer match this document.
     *
     * Generated from protobuf field <code>repeated int32 removed_target_ids = 6;</code>
     *
     * @return RepeatedField
     */
    public function getRemovedTargetIds()
    {
        return $this->removed_target_ids;
    }

    /**
     * A set of target IDs for targets that no longer match this document.
     *
     * Generated from protobuf field <code>repeated int32 removed_target_ids = 6;</code>
     *
     * @param int[]|RepeatedField $var
     * @return $this
     */
    public function setRemovedTargetIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->removed_target_ids = $arr;

        return $this;
    }

}

