<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Firestore\V1\Firestore;

/**
 * The response for [Firestore.PartitionQuery][google.firestore.v1.Firestore.PartitionQuery].
 *
 * Generated from protobuf message <code>google.firestore.v1.PartitionQueryResponse</code>
 */
class PartitionQueryResponse extends Message
{
    /**
     * Partition results.
     * Each partition is a split point that can be used by RunQuery as a starting
     * or end point for the query results. The RunQuery requests must be made with
     * the same query supplied to this PartitionQuery request. The partition
     * cursors will be ordered according to same ordering as the results of the
     * query supplied to PartitionQuery.
     * For example, if a PartitionQuery request returns partition cursors A and B,
     * running the following three queries will return the entire result set of
     * the original query:
     *  * query, end_at A
     *  * query, start_at A, end_at B
     *  * query, start_at B
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Cursor partitions = 1;</code>
     */
    private $partitions;
    /**
     * A page token that may be used to request an additional set of results, up
     * to the number specified by `partition_count` in the PartitionQuery request.
     * If blank, there are no more results.
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
     *     @type Cursor[]|RepeatedField $partitions
     *           Partition results.
     *           Each partition is a split point that can be used by RunQuery as a starting
     *           or end point for the query results. The RunQuery requests must be made with
     *           the same query supplied to this PartitionQuery request. The partition
     *           cursors will be ordered according to same ordering as the results of the
     *           query supplied to PartitionQuery.
     *           For example, if a PartitionQuery request returns partition cursors A and B,
     *           running the following three queries will return the entire result set of
     *           the original query:
     *            * query, end_at A
     *            * query, start_at A, end_at B
     *            * query, start_at B
     *     @type string $next_page_token
     *           A page token that may be used to request an additional set of results, up
     *           to the number specified by `partition_count` in the PartitionQuery request.
     *           If blank, there are no more results.
     * }
     */
    public function __construct($data = NULL) {
        Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Partition results.
     * Each partition is a split point that can be used by RunQuery as a starting
     * or end point for the query results. The RunQuery requests must be made with
     * the same query supplied to this PartitionQuery request. The partition
     * cursors will be ordered according to same ordering as the results of the
     * query supplied to PartitionQuery.
     * For example, if a PartitionQuery request returns partition cursors A and B,
     * running the following three queries will return the entire result set of
     * the original query:
     *  * query, end_at A
     *  * query, start_at A, end_at B
     *  * query, start_at B
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Cursor partitions = 1;</code>
     *
     * @return RepeatedField
     */
    public function getPartitions()
    {
        return $this->partitions;
    }

    /**
     * Partition results.
     * Each partition is a split point that can be used by RunQuery as a starting
     * or end point for the query results. The RunQuery requests must be made with
     * the same query supplied to this PartitionQuery request. The partition
     * cursors will be ordered according to same ordering as the results of the
     * query supplied to PartitionQuery.
     * For example, if a PartitionQuery request returns partition cursors A and B,
     * running the following three queries will return the entire result set of
     * the original query:
     *  * query, end_at A
     *  * query, start_at A, end_at B
     *  * query, start_at B
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Cursor partitions = 1;</code>
     *
     * @param Cursor[]|RepeatedField $var
     * @return $this
     */
    public function setPartitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Cursor::class);
        $this->partitions = $arr;

        return $this;
    }

    /**
     * A page token that may be used to request an additional set of results, up
     * to the number specified by `partition_count` in the PartitionQuery request.
     * If blank, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A page token that may be used to request an additional set of results, up
     * to the number specified by `partition_count` in the PartitionQuery request.
     * If blank, there are no more results.
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

