<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/index.proto

namespace Google\Cloud\Firestore\Admin\V1\Index;

use Google\Cloud\Firestore\Admin\V1\Index_IndexField;
use Google\Cloud\Firestore\Admin\V1\Index_IndexField_ArrayConfig;
use Google\Cloud\Firestore\Admin\V1\Index_IndexField_Order;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Firestore\Admin\V1\Index;

/**
 * A field in an index.
 * The field_path describes which field is indexed, the value_mode describes
 * how the field value is indexed.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.Index.IndexField</code>
 */
class IndexField extends Message
{
    protected $value_mode;
    /**
     * Can be __name__.
     * For single field indexes, this must match the name of the field or may
     * be omitted.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     */
    private $field_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_path
     *           Can be __name__.
     *           For single field indexes, this must match the name of the field or may
     *           be omitted.
     *     @type int $order
     *           Indicates that this field supports ordering by the specified order or
     *           comparing using =, <, <=, >, >=.
     *     @type int $array_config
     *           Indicates that this field supports operations on `array_value`s.
     * }
     */
    public function __construct($data = NULL) {
        Index::initOnce();
        parent::__construct($data);
    }

    /**
     * Can be __name__.
     * For single field indexes, this must match the name of the field or may
     * be omitted.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * Can be __name__.
     * For single field indexes, this must match the name of the field or may
     * be omitted.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

    /**
     * Indicates that this field supports ordering by the specified order or
     * comparing using =, <, <=, >, >=.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.IndexField.Order order = 2;</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->readOneof(2);
    }

    /**
     * Indicates that this field supports ordering by the specified order or
     * comparing using =, <, <=, >, >=.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.IndexField.Order order = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkEnum($var, Index_IndexField_Order::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Indicates that this field supports operations on `array_value`s.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.IndexField.ArrayConfig array_config = 3;</code>
     * @return int
     */
    public function getArrayConfig()
    {
        return $this->readOneof(3);
    }

    /**
     * Indicates that this field supports operations on `array_value`s.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.IndexField.ArrayConfig array_config = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setArrayConfig($var)
    {
        GPBUtil::checkEnum($var, Index_IndexField_ArrayConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValueMode()
    {
        return $this->whichOneof("value_mode");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IndexField::class, Index_IndexField::class);

