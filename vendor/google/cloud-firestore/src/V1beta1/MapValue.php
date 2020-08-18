<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/document.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Internal\Message;

/**
 * A map value.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.MapValue</code>
 */
class MapValue extends Message
{
    /**
     * The map's fields.
     * The map keys represent field names. Field names matching the regular
     * expression `__.*__` are reserved. Reserved field names are forbidden except
     * in certain documented contexts. The map keys, represented as UTF-8, must
     * not exceed 1,500 bytes and cannot be empty.
     *
     * Generated from protobuf field <code>map<string, .google.firestore.v1beta1.Value> fields = 1;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array             $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|MapField $fields
     *           The map's fields.
     *           The map keys represent field names. Field names matching the regular
     *           expression `__.*__` are reserved. Reserved field names are forbidden except
     *           in certain documented contexts. The map keys, represented as UTF-8, must
     *           not exceed 1,500 bytes and cannot be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The map's fields.
     * The map keys represent field names. Field names matching the regular
     * expression `__.*__` are reserved. Reserved field names are forbidden except
     * in certain documented contexts. The map keys, represented as UTF-8, must
     * not exceed 1,500 bytes and cannot be empty.
     *
     * Generated from protobuf field <code>map<string, .google.firestore.v1beta1.Value> fields = 1;</code>
     * @return MapField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * The map's fields.
     * The map keys represent field names. Field names matching the regular
     * expression `__.*__` are reserved. Reserved field names are forbidden except
     * in certain documented contexts. The map keys, represented as UTF-8, must
     * not exceed 1,500 bytes and cannot be empty.
     *
     * Generated from protobuf field <code>map<string, .google.firestore.v1beta1.Value> fields = 1;</code>
     *
     * @param array|MapField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING, GPBType::MESSAGE, Value::class);
        $this->fields = $arr;

        return $this;
    }

}

