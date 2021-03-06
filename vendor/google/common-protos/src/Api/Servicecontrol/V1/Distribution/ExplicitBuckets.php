<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/distribution.proto

namespace Google\Api\Servicecontrol\V1\Distribution;

use Google\Api\Servicecontrol\V1\Distribution_ExplicitBuckets;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Api\Servicecontrol\V1\Distribution;

/**
 * Describing buckets with arbitrary user-provided width.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.Distribution.ExplicitBuckets</code>
 */
class ExplicitBuckets extends Message
{
    /**
     * 'bound' is a list of strictly increasing boundaries between
     * buckets. Note that a list of length N-1 defines N buckets because
     * of fenceposting. See comments on `bucket_options` for details.
     * The i'th finite bucket covers the interval
     *   [bound[i-1], bound[i])
     * where i ranges from 1 to bound_size() - 1. Note that there are no
     * finite buckets at all if 'bound' only contains a single element; in
     * that special case the single bound defines the boundary between the
     * underflow and overflow buckets.
     * bucket number                   lower bound    upper bound
     *  i == 0 (underflow)              -inf           bound[i]
     *  0 < i < bound_size()            bound[i-1]     bound[i]
     *  i == bound_size() (overflow)    bound[i-1]     +inf
     *
     * Generated from protobuf field <code>repeated double bounds = 1;</code>
     */
    private $bounds;

    /**
     * Constructor.
     *
     * @param array                    $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float[]|RepeatedField $bounds
     *           'bound' is a list of strictly increasing boundaries between
     *           buckets. Note that a list of length N-1 defines N buckets because
     *           of fenceposting. See comments on `bucket_options` for details.
     *           The i'th finite bucket covers the interval
     *             [bound[i-1], bound[i])
     *           where i ranges from 1 to bound_size() - 1. Note that there are no
     *           finite buckets at all if 'bound' only contains a single element; in
     *           that special case the single bound defines the boundary between the
     *           underflow and overflow buckets.
     *           bucket number                   lower bound    upper bound
     *            i == 0 (underflow)              -inf           bound[i]
     *            0 < i < bound_size()            bound[i-1]     bound[i]
     *            i == bound_size() (overflow)    bound[i-1]     +inf
     * }
     */
    public function __construct($data = NULL) {
        Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * 'bound' is a list of strictly increasing boundaries between
     * buckets. Note that a list of length N-1 defines N buckets because
     * of fenceposting. See comments on `bucket_options` for details.
     * The i'th finite bucket covers the interval
     *   [bound[i-1], bound[i])
     * where i ranges from 1 to bound_size() - 1. Note that there are no
     * finite buckets at all if 'bound' only contains a single element; in
     * that special case the single bound defines the boundary between the
     * underflow and overflow buckets.
     * bucket number                   lower bound    upper bound
     *  i == 0 (underflow)              -inf           bound[i]
     *  0 < i < bound_size()            bound[i-1]     bound[i]
     *  i == bound_size() (overflow)    bound[i-1]     +inf
     *
     * Generated from protobuf field <code>repeated double bounds = 1;</code>
     *
     * @return RepeatedField
     */
    public function getBounds()
    {
        return $this->bounds;
    }

    /**
     * 'bound' is a list of strictly increasing boundaries between
     * buckets. Note that a list of length N-1 defines N buckets because
     * of fenceposting. See comments on `bucket_options` for details.
     * The i'th finite bucket covers the interval
     *   [bound[i-1], bound[i])
     * where i ranges from 1 to bound_size() - 1. Note that there are no
     * finite buckets at all if 'bound' only contains a single element; in
     * that special case the single bound defines the boundary between the
     * underflow and overflow buckets.
     * bucket number                   lower bound    upper bound
     *  i == 0 (underflow)              -inf           bound[i]
     *  0 < i < bound_size()            bound[i-1]     bound[i]
     *  i == bound_size() (overflow)    bound[i-1]     +inf
     *
     * Generated from protobuf field <code>repeated double bounds = 1;</code>
     *
     * @param float[]|RepeatedField $var
     * @return $this
     */
    public function setBounds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::DOUBLE);
        $this->bounds = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExplicitBuckets::class, Distribution_ExplicitBuckets::class);

