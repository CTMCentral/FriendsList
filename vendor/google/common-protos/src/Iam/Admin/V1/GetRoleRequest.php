<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Iam\Admin\V1\Iam;

/**
 * The request to get the definition of an existing role.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.GetRoleRequest</code>
 */
class GetRoleRequest extends Message
{
    /**
     * The `name` parameter's value depends on the target resource for the
     * request, namely
     * [`roles`](/iam/reference/rest/v1/roles),
     * [`projects`](/iam/reference/rest/v1/projects.roles), or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `name` value format is described below:
     * * [`roles.get()`](/iam/reference/rest/v1/roles/get): `roles/{ROLE_NAME}`.
     *   This method returns results from all
     *   [predefined roles](/iam/docs/understanding-roles#predefined_roles) in
     *   Cloud IAM. Example request URL:
     *   `https://iam.googleapis.com/v1/roles/{ROLE_NAME}`
     * * [`projects.roles.get()`](/iam/reference/rest/v1/projects.roles/get):
     *   `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method returns only
     *   [custom roles](/iam/docs/understanding-custom-roles) that have been
     *   created at the project level. Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     * * [`organizations.roles.get()`](/iam/reference/rest/v1/organizations.roles/get):
     *   `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *   returns only [custom roles](/iam/docs/understanding-custom-roles) that
     *   have been created at the organization level. Example request URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The `name` parameter's value depends on the target resource for the
     *           request, namely
     *           [`roles`](/iam/reference/rest/v1/roles),
     *           [`projects`](/iam/reference/rest/v1/projects.roles), or
     *           [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     *           resource type's `name` value format is described below:
     *           * [`roles.get()`](/iam/reference/rest/v1/roles/get): `roles/{ROLE_NAME}`.
     *             This method returns results from all
     *             [predefined roles](/iam/docs/understanding-roles#predefined_roles) in
     *             Cloud IAM. Example request URL:
     *             `https://iam.googleapis.com/v1/roles/{ROLE_NAME}`
     *           * [`projects.roles.get()`](/iam/reference/rest/v1/projects.roles/get):
     *             `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method returns only
     *             [custom roles](/iam/docs/understanding-custom-roles) that have been
     *             created at the project level. Example request URL:
     *             `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     *           * [`organizations.roles.get()`](/iam/reference/rest/v1/organizations.roles/get):
     *             `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *             returns only [custom roles](/iam/docs/understanding-custom-roles) that
     *             have been created at the organization level. Example request URL:
     *             `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     *           Note: Wildcard (*) values are invalid; you must specify a complete project
     *           ID or organization ID.
     * }
     */
    public function __construct($data = NULL) {
        Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The `name` parameter's value depends on the target resource for the
     * request, namely
     * [`roles`](/iam/reference/rest/v1/roles),
     * [`projects`](/iam/reference/rest/v1/projects.roles), or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `name` value format is described below:
     * * [`roles.get()`](/iam/reference/rest/v1/roles/get): `roles/{ROLE_NAME}`.
     *   This method returns results from all
     *   [predefined roles](/iam/docs/understanding-roles#predefined_roles) in
     *   Cloud IAM. Example request URL:
     *   `https://iam.googleapis.com/v1/roles/{ROLE_NAME}`
     * * [`projects.roles.get()`](/iam/reference/rest/v1/projects.roles/get):
     *   `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method returns only
     *   [custom roles](/iam/docs/understanding-custom-roles) that have been
     *   created at the project level. Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     * * [`organizations.roles.get()`](/iam/reference/rest/v1/organizations.roles/get):
     *   `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *   returns only [custom roles](/iam/docs/understanding-custom-roles) that
     *   have been created at the organization level. Example request URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The `name` parameter's value depends on the target resource for the
     * request, namely
     * [`roles`](/iam/reference/rest/v1/roles),
     * [`projects`](/iam/reference/rest/v1/projects.roles), or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `name` value format is described below:
     * * [`roles.get()`](/iam/reference/rest/v1/roles/get): `roles/{ROLE_NAME}`.
     *   This method returns results from all
     *   [predefined roles](/iam/docs/understanding-roles#predefined_roles) in
     *   Cloud IAM. Example request URL:
     *   `https://iam.googleapis.com/v1/roles/{ROLE_NAME}`
     * * [`projects.roles.get()`](/iam/reference/rest/v1/projects.roles/get):
     *   `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method returns only
     *   [custom roles](/iam/docs/understanding-custom-roles) that have been
     *   created at the project level. Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     * * [`organizations.roles.get()`](/iam/reference/rest/v1/organizations.roles/get):
     *   `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *   returns only [custom roles](/iam/docs/understanding-custom-roles) that
     *   have been created at the organization level. Example request URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
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

