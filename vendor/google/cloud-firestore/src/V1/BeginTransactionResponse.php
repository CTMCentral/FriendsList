<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Firestore\V1\Firestore;

/**
 * The response for [Firestore.BeginTransaction][google.firestore.v1.Firestore.BeginTransaction].
 *
 * Generated from protobuf message <code>google.firestore.v1.BeginTransactionResponse</code>
 */
class BeginTransactionResponse extends Message
{
    /**
     * The transaction that was started.
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     */
    private $transaction = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transaction
     *           The transaction that was started.
     * }
     */
    public function __construct($data = NULL) {
        Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * The transaction that was started.
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The transaction that was started.
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

}

