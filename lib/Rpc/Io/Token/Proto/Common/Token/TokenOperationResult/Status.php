<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace Io\Token\Proto\Common\Token\TokenOperationResult;

/**
 * Protobuf type <code>io.token.proto.common.token.TokenOperationResult.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>INVALID = 0;</code>
     */
    const INVALID = 0;
    /**
     * Operation succeeded.
     *
     * Generated from protobuf enum <code>SUCCESS = 1;</code>
     */
    const SUCCESS = 1;
    /**
     * Token needs more signatures.
     * If that's surprising: Perhaps used LOW or STANDARD key but needs PRIVILEGED?
     *
     * Generated from protobuf enum <code>MORE_SIGNATURES_NEEDED = 2;</code>
     */
    const MORE_SIGNATURES_NEEDED = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Io\Token\Proto\Common\Token\TokenOperationResult_Status::class);
