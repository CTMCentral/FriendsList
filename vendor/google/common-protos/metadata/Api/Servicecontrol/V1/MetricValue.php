<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/metric_value.proto

namespace GPBMetadata\Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\DescriptorPool;
use GPBMetadata\Google\Api\Annotations;
use GPBMetadata\Google\Protobuf\Timestamp;
use GPBMetadata\Google\Type\Money;

class MetricValue
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        Annotations::initOnce();
        Distribution::initOnce();
        Timestamp::initOnce();
        Money::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aca060a2f676f6f676c652f6170692f73657276696365636f6e74726f6c" .
            "2f76312f6d65747269635f76616c75652e70726f746f121c676f6f676c65" .
            "2e6170692e73657276696365636f6e74726f6c2e76311a2f676f6f676c65" .
            "2f6170692f73657276696365636f6e74726f6c2f76312f64697374726962" .
            "7574696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74" .
            "696d657374616d702e70726f746f1a17676f6f676c652f747970652f6d6f" .
            "6e65792e70726f746f2291030a0b4d657472696356616c756512450a066c" .
            "6162656c7318012003280b32352e676f6f676c652e6170692e7365727669" .
            "6365636f6e74726f6c2e76312e4d657472696356616c75652e4c6162656c" .
            "73456e747279122e0a0a73746172745f74696d6518022001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d70122c0a08656e" .
            "645f74696d6518032001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d7012140a0a626f6f6c5f76616c7565180420012808" .
            "480012150a0b696e7436345f76616c7565180520012803480012160a0c64" .
            "6f75626c655f76616c7565180620012801480012160a0c737472696e675f" .
            "76616c7565180720012809480012480a12646973747269627574696f6e5f" .
            "76616c756518082001280b322a2e676f6f676c652e6170692e7365727669" .
            "6365636f6e74726f6c2e76312e446973747269627574696f6e48001a2d0a" .
            "0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576" .
            "616c75651802200128093a02380142070a0576616c756522670a0e4d6574" .
            "72696356616c756553657412130a0b6d65747269635f6e616d6518012001" .
            "280912400a0d6d65747269635f76616c75657318022003280b32292e676f" .
            "6f676c652e6170692e73657276696365636f6e74726f6c2e76312e4d6574" .
            "72696356616c75654288010a20636f6d2e676f6f676c652e6170692e7365" .
            "7276696365636f6e74726f6c2e763142134d657472696356616c75655365" .
            "7450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f6170692f7365727669636563" .
            "6f6e74726f6c2f76313b73657276696365636f6e74726f6cf80101620670" .
            "726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

