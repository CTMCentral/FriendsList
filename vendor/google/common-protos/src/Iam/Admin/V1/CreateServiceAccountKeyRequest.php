<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/adminSubCommand/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Iam\Admin\V1\Iam;

/**
 * The service account key create request.
 *
 * Generated from protobuf message <code>google.iam.adminSubCommand.v1.CreateServiceAccountKeyRequest</code>
 */
class CreateServiceAccountKeyRequest extends Message
{
    /**
     * Required. The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The output format of the private key. The default value is
     * `TYPE_GOOGLE_CREDENTIALS_FILE`, which is the Google Credentials File
     * format.
     *
     * Generated from protobuf field <code>.google.iam.adminSubCommand.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     */
    private $private_key_type = 0;
    /**
     * Which type of key and algorithm to use for the key.
     * The default is currently a 2K RSA key.  However this may change in the
     * future.
     *
     * Generated from protobuf field <code>.google.iam.adminSubCommand.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     */
    private $key_algorithm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the service account in the following format:
     *           `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *           Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *           the account. The `ACCOUNT` value can be the `email` address or the
     *           `unique_id` of the service account.
     *     @type int $private_key_type
     *           The output format of the private key. The default value is
     *           `TYPE_GOOGLE_CREDENTIALS_FILE`, which is the Google Credentials File
     *           format.
     *     @type int $key_algorithm
     *           Which type of key and algorithm to use for the key.
     *           The default is currently a 2K RSA key.  However this may change in the
     *           future.
     * }
     */
    public function __construct($data = NULL) {
        Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
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
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
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
     * The output format of the private key. The default value is
     * `TYPE_GOOGLE_CREDENTIALS_FILE`, which is the Google Credentials File
     * format.
     *
     * Generated from protobuf field <code>.google.iam.adminSubCommand.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     * @return int
     */
    public function getPrivateKeyType()
    {
        return $this->private_key_type;
    }

    /**
     * The output format of the private key. The default value is
     * `TYPE_GOOGLE_CREDENTIALS_FILE`, which is the Google Credentials File
     * format.
     *
     * Generated from protobuf field <code>.google.iam.adminSubCommand.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPrivateKeyType($var)
    {
        GPBUtil::checkEnum($var, ServiceAccountPrivateKeyType::class);
        $this->private_key_type = $var;

        return $this;
    }

    /**
     * Which type of key and algorithm to use for the key.
     * The default is currently a 2K RSA key.  However this may change in the
     * future.
     *
     * Generated from protobuf field <code>.google.iam.adminSubCommand.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     * @return int
     */
    public function getKeyAlgorithm()
    {
        return $this->key_algorithm;
    }

    /**
     * Which type of key and algorithm to use for the key.
     * The default is currently a 2K RSA key.  However this may change in the
     * future.
     *
     * Generated from protobuf field <code>.google.iam.adminSubCommand.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyAlgorithm($var)
    {
        GPBUtil::checkEnum($var, ServiceAccountKeyAlgorithm::class);
        $this->key_algorithm = $var;

        return $this;
    }

}
