<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/auth.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Api\Auth;

/**
 * Authentication rules for the service.
 * By default, if a method has any authentication requirements, every request
 * must include a valid credential matching one of the requirements.
 * It's an error to include more than one kind of credential in a single
 * request.
 * If a method doesn't have any auth requirements, request credentials will be
 * ignored.
 *
 * Generated from protobuf message <code>google.api.AuthenticationRule</code>
 */
class AuthenticationRule extends Message
{
    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    private $selector = '';
    /**
     * The requirements for OAuth credentials.
     *
     * Generated from protobuf field <code>.google.api.OAuthRequirements oauth = 2;</code>
     */
    private $oauth = null;
    /**
     * If true, the service accepts API keys without any other credential.
     *
     * Generated from protobuf field <code>bool allow_without_credential = 5;</code>
     */
    private $allow_without_credential = false;
    /**
     * Requirements for additional authentication providers.
     *
     * Generated from protobuf field <code>repeated .google.api.AuthRequirement requirements = 7;</code>
     */
    private $requirements;

    /**
     * Constructor.
     *
     * @param array                              $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string                          $selector
     *           Selects the methods to which this rule applies.
     *           Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *     @type OAuthRequirements               $oauth
     *           The requirements for OAuth credentials.
     *     @type bool                            $allow_without_credential
     *           If true, the service accepts API keys without any other credential.
     *     @type AuthRequirement[]|RepeatedField $requirements
     *           Requirements for additional authentication providers.
     * }
     */
    public function __construct($data = NULL) {
        Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Selects the methods to which this rule applies.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;

        return $this;
    }

    /**
     * The requirements for OAuth credentials.
     *
     * Generated from protobuf field <code>.google.api.OAuthRequirements oauth = 2;</code>
     *
     * @return OAuthRequirements
     */
    public function getOauth()
    {
        return $this->oauth;
    }

    /**
     * The requirements for OAuth credentials.
     *
     * Generated from protobuf field <code>.google.api.OAuthRequirements oauth = 2;</code>
     *
     * @param OAuthRequirements $var
     * @return $this
     */
    public function setOauth($var)
    {
        GPBUtil::checkMessage($var, OAuthRequirements::class);
        $this->oauth = $var;

        return $this;
    }

    /**
     * If true, the service accepts API keys without any other credential.
     *
     * Generated from protobuf field <code>bool allow_without_credential = 5;</code>
     * @return bool
     */
    public function getAllowWithoutCredential()
    {
        return $this->allow_without_credential;
    }

    /**
     * If true, the service accepts API keys without any other credential.
     *
     * Generated from protobuf field <code>bool allow_without_credential = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowWithoutCredential($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_without_credential = $var;

        return $this;
    }

    /**
     * Requirements for additional authentication providers.
     *
     * Generated from protobuf field <code>repeated .google.api.AuthRequirement requirements = 7;</code>
     *
     * @return RepeatedField
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Requirements for additional authentication providers.
     *
     * Generated from protobuf field <code>repeated .google.api.AuthRequirement requirements = 7;</code>
     *
     * @param AuthRequirement[]|RepeatedField $var
     * @return $this
     */
    public function setRequirements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, AuthRequirement::class);
        $this->requirements = $arr;

        return $this;
    }

}

