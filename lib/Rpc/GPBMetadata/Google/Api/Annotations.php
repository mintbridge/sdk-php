<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/annotations.proto

namespace GPBMetadata\Google\Api;

class Annotations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a7a0a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f" .
            "746f120a676f6f676c652e6170691a20676f6f676c652f70726f746f6275" .
            "662f64657363726970746f722e70726f746f42240a0e636f6d2e676f6f67" .
            "6c652e6170694210416e6e6f746174696f6e7350726f746f500162067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}

