<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/credentials/v1/common.proto

namespace Google\Iam\Credentials\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Iam\Credentials\V1\Common;

/**
 * Generated from protobuf message <code>google.iam.credentials.v1.GenerateIdTokenRequest</code>
 */
class GenerateIdTokenRequest extends Message
{
    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     */
    private $delegates;
    /**
     * Required. The audience for the token, such as the API or account that this token
     * grants access to.
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $audience = '';
    /**
     * Include the service account email in the token. If set to `true`, the
     * token will contain `email` and `email_verified` claims.
     *
     * Generated from protobuf field <code>bool include_email = 4;</code>
     */
    private $include_email = false;

    /**
     * Constructor.
     *
     * @param array                     $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                 $name
     *           Required. The resource name of the service account for which the credentials
     *           are requested, in the following format:
     *           `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *           character is required; replacing it with a project ID is invalid.
     *     @type string[]|RepeatedField $delegates
     *           The sequence of service accounts in a delegation chain. Each service
     *           account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *           on its next service account in the chain. The last service account in the
     *           chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *           on the service account that is specified in the `name` field of the
     *           request.
     *           The delegates must have the following format:
     *           `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *           character is required; replacing it with a project ID is invalid.
     *     @type string                 $audience
     *           Required. The audience for the token, such as the API or account that this token
     *           grants access to.
     *     @type bool $include_email
     *           Include the service account email in the token. If set to `true`, the
     *           token will contain `email` and `email_verified` claims.
     * }
     */
    public function __construct($data = NULL) {
        Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
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
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     *
     * @return RepeatedField
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    /**
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     *
     * @param string[]|RepeatedField $var
     * @return $this
     */
    public function setDelegates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->delegates = $arr;

        return $this;
    }

    /**
     * Required. The audience for the token, such as the API or account that this token
     * grants access to.
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Required. The audience for the token, such as the API or account that this token
     * grants access to.
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

    /**
     * Include the service account email in the token. If set to `true`, the
     * token will contain `email` and `email_verified` claims.
     *
     * Generated from protobuf field <code>bool include_email = 4;</code>
     * @return bool
     */
    public function getIncludeEmail()
    {
        return $this->include_email;
    }

    /**
     * Include the service account email in the token. If set to `true`, the
     * token will contain `email` and `email_verified` claims.
     *
     * Generated from protobuf field <code>bool include_email = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeEmail($var)
    {
        GPBUtil::checkBool($var);
        $this->include_email = $var;

        return $this;
    }

}
