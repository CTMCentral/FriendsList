<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/logging/audit_data.proto

namespace GPBMetadata\Google\Iam\V1\Logging;

use Google\Protobuf\Internal\DescriptorPool;
use GPBMetadata\Google\Api\Annotations;
use GPBMetadata\Google\Iam\V1\Policy;

class AuditData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        Annotations::initOnce();
        Policy::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aae020a26676f6f676c652f69616d2f76312f6c6f6767696e672f617564" .
            "69745f646174612e70726f746f1215676f6f676c652e69616d2e76312e6c" .
            "6f6767696e671a1a676f6f676c652f69616d2f76312f706f6c6963792e70" .
            "726f746f223d0a0941756469744461746112300a0c706f6c6963795f6465" .
            "6c746118022001280b321a2e676f6f676c652e69616d2e76312e506f6c69" .
            "637944656c74614289010a19636f6d2e676f6f676c652e69616d2e76312e" .
            "6c6f6767696e67420e41756469744461746150726f746f50015a3c676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f69616d2f76312f6c6f6767696e673b6c6f6767696e67aa021b" .
            "476f6f676c652e436c6f75642e49616d2e56312e4c6f6767696e67620670" .
            "726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

