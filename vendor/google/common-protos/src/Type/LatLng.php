<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/latlng.proto

namespace Google\Type;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * An object representing a latitude/longitude pair. This is expressed as a pair
 * of doubles representing degrees latitude and degrees longitude. Unless
 * specified otherwise, this must conform to the
 * <a href="http://www.unoosa.org/pdf/icg/2012/template/WGS_84.pdf">WGS84
 * standard</a>. Values must be within normalized ranges.
 *
 * Generated from protobuf message <code>google.type.LatLng</code>
 */
class LatLng extends Message
{
    /**
     * The latitude in degrees. It must be in the range [-90.0, +90.0].
     *
     * Generated from protobuf field <code>double latitude = 1;</code>
     */
    private $latitude = 0.0;
    /**
     * The longitude in degrees. It must be in the range [-180.0, +180.0].
     *
     * Generated from protobuf field <code>double longitude = 2;</code>
     */
    private $longitude = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $latitude
     *           The latitude in degrees. It must be in the range [-90.0, +90.0].
     *     @type float $longitude
     *           The longitude in degrees. It must be in the range [-180.0, +180.0].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Type\Latlng::initOnce();
        parent::__construct($data);
    }

    /**
     * The latitude in degrees. It must be in the range [-90.0, +90.0].
     *
     * Generated from protobuf field <code>double latitude = 1;</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * The latitude in degrees. It must be in the range [-90.0, +90.0].
     *
     * Generated from protobuf field <code>double latitude = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;

        return $this;
    }

    /**
     * The longitude in degrees. It must be in the range [-180.0, +180.0].
     *
     * Generated from protobuf field <code>double longitude = 2;</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * The longitude in degrees. It must be in the range [-180.0, +180.0].
     *
     * Generated from protobuf field <code>double longitude = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;

        return $this;
    }

}

