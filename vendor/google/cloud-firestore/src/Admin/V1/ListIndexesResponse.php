<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/firestore_admin.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Firestore\Admin\V1\FirestoreAdmin;

/**
 * The response for [FirestoreAdmin.ListIndexes][google.firestore.admin.v1.FirestoreAdmin.ListIndexes].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.ListIndexesResponse</code>
 */
class ListIndexesResponse extends Message
{
    /**
     * The requested indexes.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.Index indexes = 1;</code>
     */
    private $indexes;
    /**
     * A page token that may be used to request another page of results. If blank,
     * this is the last page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array                    $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Index[]|RepeatedField $indexes
     *           The requested indexes.
     *     @type string                $next_page_token
     *           A page token that may be used to request another page of results. If blank,
     *           this is the last page.
     * }
     */
    public function __construct($data = NULL) {
        FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The requested indexes.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.Index indexes = 1;</code>
     *
     * @return RepeatedField
     */
    public function getIndexes()
    {
        return $this->indexes;
    }

    /**
     * The requested indexes.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.Index indexes = 1;</code>
     *
     * @param Index[]|RepeatedField $var
     * @return $this
     */
    public function setIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Index::class);
        $this->indexes = $arr;

        return $this;
    }

    /**
     * A page token that may be used to request another page of results. If blank,
     * this is the last page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A page token that may be used to request another page of results. If blank,
     * this is the last page.
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

