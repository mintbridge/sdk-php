<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway\GetTokensRequest;

/**
 * Protobuf type <code>io.token.proto.gateway.GetTokensRequest.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>INVALID = 0;</code>
     */
    const INVALID = 0;
    /**
     * Generated from protobuf enum <code>ACCESS = 1;</code>
     */
    const ACCESS = 1;
    /**
     * Generated from protobuf enum <code>TRANSFER = 2;</code>
     */
    const TRANSFER = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Io\Token\Proto\Gateway\GetTokensRequest_Type::class);

