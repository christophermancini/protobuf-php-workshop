<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: response.proto

namespace GPBMetadata;

class Response
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac5010a0e726573706f6e73652e70726f746f1211506870576f726c642e" .
            "4d657373616765732297010a08526573706f6e736512320a056572726f72" .
            "18012001280b32212e506870576f726c642e4d657373616765732e526573" .
            "706f6e73652e4572726f72480012270a047573657218022001280b32172e" .
            "506870576f726c642e4d657373616765732e5573657248001a260a054572" .
            "726f72120c0a04636f6465180120012805120f0a076d6573736167651802" .
            "2001280942060a0464617461620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

