<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/check_error.proto

namespace Google\Api\Servicecontrol\V1\CheckError;

use Google\Api\Servicecontrol\V1\CheckError_Code;
use UnexpectedValueException;

/**
 * Error codes for Check responses.
 *
 * Protobuf type <code>google.api.servicecontrol.v1.CheckError.Code</code>
 */
class Code
{
    /**
     * This is never used in `CheckResponse`.
     *
     * Generated from protobuf enum <code>ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    const ERROR_CODE_UNSPECIFIED = 0;
    /**
     * The consumer's project id, network container, or resource container was
     * not found. Same as [google.rpc.Code.NOT_FOUND][].
     *
     * Generated from protobuf enum <code>NOT_FOUND = 5;</code>
     */
    const NOT_FOUND = 5;
    /**
     * The consumer doesn't have access to the specified resource.
     * Same as [google.rpc.Code.PERMISSION_DENIED][].
     *
     * Generated from protobuf enum <code>PERMISSION_DENIED = 7;</code>
     */
    const PERMISSION_DENIED = 7;
    /**
     * Quota check failed. Same as [google.rpc.Code.RESOURCE_EXHAUSTED][].
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED = 8;</code>
     */
    const RESOURCE_EXHAUSTED = 8;
    /**
     * The consumer has been flagged as an abuser.
     *
     * Generated from protobuf enum <code>ABUSER_DETECTED = 103;</code>
     */
    const ABUSER_DETECTED = 103;
    /**
     * The consumer hasn't activated the service.
     *
     * Generated from protobuf enum <code>SERVICE_NOT_ACTIVATED = 104;</code>
     */
    const SERVICE_NOT_ACTIVATED = 104;
    /**
     * The consumer cannot access the service because billing is disabled.
     *
     * Generated from protobuf enum <code>BILLING_DISABLED = 107;</code>
     */
    const BILLING_DISABLED = 107;
    /**
     * The consumer's project has been marked as deleted (soft deletion).
     *
     * Generated from protobuf enum <code>PROJECT_DELETED = 108;</code>
     */
    const PROJECT_DELETED = 108;
    /**
     * The consumer's project number or id does not represent a valid project.
     *
     * Generated from protobuf enum <code>PROJECT_INVALID = 114;</code>
     */
    const PROJECT_INVALID = 114;
    /**
     * The IP address of the consumer is invalid for the specific consumer
     * project.
     *
     * Generated from protobuf enum <code>IP_ADDRESS_BLOCKED = 109;</code>
     */
    const IP_ADDRESS_BLOCKED = 109;
    /**
     * The referer address of the consumer request is invalid for the specific
     * consumer project.
     *
     * Generated from protobuf enum <code>REFERER_BLOCKED = 110;</code>
     */
    const REFERER_BLOCKED = 110;
    /**
     * The client application of the consumer request is invalid for the
     * specific consumer project.
     *
     * Generated from protobuf enum <code>CLIENT_APP_BLOCKED = 111;</code>
     */
    const CLIENT_APP_BLOCKED = 111;
    /**
     * The API targeted by this request is invalid for the specified consumer
     * project.
     *
     * Generated from protobuf enum <code>API_TARGET_BLOCKED = 122;</code>
     */
    const API_TARGET_BLOCKED = 122;
    /**
     * The consumer's API key is invalid.
     *
     * Generated from protobuf enum <code>API_KEY_INVALID = 105;</code>
     */
    const API_KEY_INVALID = 105;
    /**
     * The consumer's API Key has expired.
     *
     * Generated from protobuf enum <code>API_KEY_EXPIRED = 112;</code>
     */
    const API_KEY_EXPIRED = 112;
    /**
     * The consumer's API Key was not found in config record.
     *
     * Generated from protobuf enum <code>API_KEY_NOT_FOUND = 113;</code>
     */
    const API_KEY_NOT_FOUND = 113;
    /**
     * Request is not allowed as per security policies defined in Org Policy.
     *
     * Generated from protobuf enum <code>SECURITY_POLICY_VIOLATED = 121;</code>
     */
    const SECURITY_POLICY_VIOLATED = 121;
    /**
     * The credential in the request can not be verified.
     *
     * Generated from protobuf enum <code>INVALID_CREDENTIAL = 123;</code>
     */
    const INVALID_CREDENTIAL = 123;
    /**
     * Request is not allowed as per location policies defined in Org Policy.
     *
     * Generated from protobuf enum <code>LOCATION_POLICY_VIOLATED = 124;</code>
     */
    const LOCATION_POLICY_VIOLATED = 124;
    /**
     * The input consumer info does not represent a valid consumer folder or
     * organization.
     *
     * Generated from protobuf enum <code>CONSUMER_INVALID = 125;</code>
     */
    const CONSUMER_INVALID = 125;
    /**
     * The backend server for looking up project id/number is unavailable.
     *
     * Generated from protobuf enum <code>NAMESPACE_LOOKUP_UNAVAILABLE = 300;</code>
     */
    const NAMESPACE_LOOKUP_UNAVAILABLE = 300;
    /**
     * The backend server for checking service status is unavailable.
     *
     * Generated from protobuf enum <code>SERVICE_STATUS_UNAVAILABLE = 301;</code>
     */
    const SERVICE_STATUS_UNAVAILABLE = 301;
    /**
     * The backend server for checking billing status is unavailable.
     *
     * Generated from protobuf enum <code>BILLING_STATUS_UNAVAILABLE = 302;</code>
     */
    const BILLING_STATUS_UNAVAILABLE = 302;
    /**
     * The backend server for checking quota limits is unavailable.
     *
     * Generated from protobuf enum <code>QUOTA_CHECK_UNAVAILABLE = 303;</code>
     */
    const QUOTA_CHECK_UNAVAILABLE = 303;
    /**
     * Cloud Resource Manager backend server is unavailable.
     *
     * Generated from protobuf enum <code>CLOUD_RESOURCE_MANAGER_BACKEND_UNAVAILABLE = 305;</code>
     */
    const CLOUD_RESOURCE_MANAGER_BACKEND_UNAVAILABLE = 305;
    /**
     * Backend server for evaluating security policy is unavailable.
     *
     * Generated from protobuf enum <code>SECURITY_POLICY_BACKEND_UNAVAILABLE = 306;</code>
     */
    const SECURITY_POLICY_BACKEND_UNAVAILABLE = 306;
    /**
     * Backend server for evaluating location policy is unavailable.
     *
     * Generated from protobuf enum <code>LOCATION_POLICY_BACKEND_UNAVAILABLE = 307;</code>
     */
    const LOCATION_POLICY_BACKEND_UNAVAILABLE = 307;

    private static $valueToName = [
        self::ERROR_CODE_UNSPECIFIED => 'ERROR_CODE_UNSPECIFIED',
        self::NOT_FOUND => 'NOT_FOUND',
        self::PERMISSION_DENIED => 'PERMISSION_DENIED',
        self::RESOURCE_EXHAUSTED => 'RESOURCE_EXHAUSTED',
        self::ABUSER_DETECTED => 'ABUSER_DETECTED',
        self::SERVICE_NOT_ACTIVATED => 'SERVICE_NOT_ACTIVATED',
        self::BILLING_DISABLED => 'BILLING_DISABLED',
        self::PROJECT_DELETED => 'PROJECT_DELETED',
        self::PROJECT_INVALID => 'PROJECT_INVALID',
        self::IP_ADDRESS_BLOCKED => 'IP_ADDRESS_BLOCKED',
        self::REFERER_BLOCKED => 'REFERER_BLOCKED',
        self::CLIENT_APP_BLOCKED => 'CLIENT_APP_BLOCKED',
        self::API_TARGET_BLOCKED => 'API_TARGET_BLOCKED',
        self::API_KEY_INVALID => 'API_KEY_INVALID',
        self::API_KEY_EXPIRED => 'API_KEY_EXPIRED',
        self::API_KEY_NOT_FOUND => 'API_KEY_NOT_FOUND',
        self::SECURITY_POLICY_VIOLATED => 'SECURITY_POLICY_VIOLATED',
        self::INVALID_CREDENTIAL => 'INVALID_CREDENTIAL',
        self::LOCATION_POLICY_VIOLATED => 'LOCATION_POLICY_VIOLATED',
        self::CONSUMER_INVALID => 'CONSUMER_INVALID',
        self::NAMESPACE_LOOKUP_UNAVAILABLE => 'NAMESPACE_LOOKUP_UNAVAILABLE',
        self::SERVICE_STATUS_UNAVAILABLE => 'SERVICE_STATUS_UNAVAILABLE',
        self::BILLING_STATUS_UNAVAILABLE => 'BILLING_STATUS_UNAVAILABLE',
        self::QUOTA_CHECK_UNAVAILABLE => 'QUOTA_CHECK_UNAVAILABLE',
        self::CLOUD_RESOURCE_MANAGER_BACKEND_UNAVAILABLE => 'CLOUD_RESOURCE_MANAGER_BACKEND_UNAVAILABLE',
        self::SECURITY_POLICY_BACKEND_UNAVAILABLE => 'SECURITY_POLICY_BACKEND_UNAVAILABLE',
        self::LOCATION_POLICY_BACKEND_UNAVAILABLE => 'LOCATION_POLICY_BACKEND_UNAVAILABLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Code::class, CheckError_Code::class);

