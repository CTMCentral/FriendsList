<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Google\Iam\Admin\V1\Iam;

/**
 * The request to create a new role.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.CreateRoleRequest</code>
 */
class CreateRoleRequest extends Message
{
    /**
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The role ID to use for this role.
     *
     * Generated from protobuf field <code>string role_id = 2;</code>
     */
    private $role_id = '';
    /**
     * The Role resource to create.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    private $role = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The `parent` parameter's value depends on the target resource for the
     *           request, namely
     *           [`projects`](/iam/reference/rest/v1/projects.roles) or
     *           [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     *           resource type's `parent` value format is described below:
     *           * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *             `projects/{PROJECT_ID}`. This method creates project-level
     *             [custom roles](/iam/docs/understanding-custom-roles).
     *             Example request URL:
     *             `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     *           * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *             `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *             [custom roles](/iam/docs/understanding-custom-roles). Example request
     *             URL:
     *             `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     *           Note: Wildcard (*) values are invalid; you must specify a complete project
     *           ID or organization ID.
     *     @type string $role_id
     *           The role ID to use for this role.
     *     @type Role   $role
     *           The Role resource to create.
     * }
     */
    public function __construct($data = NULL) {
        Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The role ID to use for this role.
     *
     * Generated from protobuf field <code>string role_id = 2;</code>
     * @return string
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * The role ID to use for this role.
     *
     * Generated from protobuf field <code>string role_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRoleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->role_id = $var;

        return $this;
    }

    /**
     * The Role resource to create.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.Role role = 3;</code>
     *
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * The Role resource to create.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.Role role = 3;</code>
     *
     * @param Role $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkMessage($var, Role::class);
        $this->role = $var;

        return $this;
    }

}

