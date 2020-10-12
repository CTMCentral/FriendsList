<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/adminSubCommand/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Iam\Admin\V1\ListServiceAccountKeysRequest\KeyType;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Iam\Admin\V1\Iam;

/**
 * The service account keys list request.
 *
 * Generated from protobuf message <code>google.iam.adminSubCommand.v1.ListServiceAccountKeysRequest</code>
 */
class ListServiceAccountKeysRequest extends Message
{
    /**
     * Required. The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID`, will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Filters the types of keys the user wants to include in the list
     * response. Duplicate key types are not allowed. If no key type
     * is provided, all keys are returned.
     *
     * Generated from protobuf field <code>repeated .google.iam.adminSubCommand.v1.ListServiceAccountKeysRequest.KeyType key_types = 2;</code>
     */
    private $key_types;

    /**
     * Constructor.
     *
     * @param array                  $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string              $name
     *           Required. The resource name of the service account in the following format:
     *           `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *           Using `-` as a wildcard for the `PROJECT_ID`, will infer the project from
     *           the account. The `ACCOUNT` value can be the `email` address or the
     *           `unique_id` of the service account.
     *     @type int[]|RepeatedField $key_types
     *           Filters the types of keys the user wants to include in the list
     *           response. Duplicate key types are not allowed. If no key type
     *           is provided, all keys are returned.
     * }
     */
    public function __construct($data = NULL) {
        Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID`, will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID`, will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Filters the types of keys the user wants to include in the list
     * response. Duplicate key types are not allowed. If no key type
     * is provided, all keys are returned.
     *
     * Generated from protobuf field <code>repeated .google.iam.adminSubCommand.v1.ListServiceAccountKeysRequest.KeyType key_types = 2;</code>
     *
     * @return RepeatedField
     */
    public function getKeyTypes()
    {
        return $this->key_types;
    }

    /**
     * Filters the types of keys the user wants to include in the list
     * response. Duplicate key types are not allowed. If no key type
     * is provided, all keys are returned.
     *
     * Generated from protobuf field <code>repeated .google.iam.adminSubCommand.v1.ListServiceAccountKeysRequest.KeyType key_types = 2;</code>
     *
     * @param int[]|RepeatedField $var
     * @return $this
     */
    public function setKeyTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::ENUM, KeyType::class);
        $this->key_types = $arr;

        return $this;
    }

}
