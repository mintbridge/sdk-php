<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/auth.proto

namespace GPBMetadata\Gateway;

class Auth
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Extensions\Field::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa6020a12676174657761792f617574682e70726f746f1216696f2e746f" .
            "6b656e2e70726f746f2e676174657761792294010a0f4874747041757468" .
            "5061796c6f6164120e0a066d6574686f6418012001280912100a08757269" .
            "5f686f737418022001280912100a087572695f7061746818032001280912" .
            "1a0a0c71756572795f737472696e67180420012809420480b51801121a0a" .
            "0c726571756573745f626f6479180520012809420480b5180112150a0d63" .
            "7265617465645f61745f6d73180620012803223f0a0f4772706341757468" .
            "5061796c6f616412150a077265717565737418012001280c420480b51801" .
            "12150a0d637265617465645f61745f6d731806200128034218aa0215546f" .
            "6b656e696f2e50726f746f2e47617465776179620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

