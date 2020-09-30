<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/adminSubCommand/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Iam\Admin\V1\Iam;

/**
 * The service account delete request.
 *
 * Generated from protobuf message <code>google.iam.adminSubCommand.v1.DeleteServiceAccountRequest</code>
 */
class DeleteServiceAccountRequest extends Message
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

}

