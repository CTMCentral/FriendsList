<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Api\ConfigChange;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Api\Servicemanagement\V1\Resources;

/**
 * Change report associated with a particular service configuration.
 * It contains a list of ConfigChanges based on the comparison between
 * two service configurations.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.ChangeReport</code>
 */
class ChangeReport extends Message
{
    /**
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     *
     * Generated from protobuf field <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    private $config_changes;

    /**
     * Constructor.
     *
     * @param array                           $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type ConfigChange[]|RepeatedField $config_changes
     *           List of changes between two service configurations.
     *           The changes will be alphabetically sorted based on the identifier
     *           of each change.
     *           A ConfigChange identifier is a dot separated path to the configuration.
     *           Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * }
     */
    public function __construct($data = NULL) {
        Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     *
     * Generated from protobuf field <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     *
     * @return RepeatedField
     */
    public function getConfigChanges()
    {
        return $this->config_changes;
    }

    /**
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     *
     * Generated from protobuf field <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     *
     * @param ConfigChange[]|RepeatedField $var
     * @return $this
     */
    public function setConfigChanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, ConfigChange::class);
        $this->config_changes = $arr;

        return $this;
    }

}

