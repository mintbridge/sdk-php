<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace Io\Token\Proto\Common\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Token operation status
 *
 * Generated from protobuf message <code>io.token.proto.common.token.TokenOperationResult</code>
 */
class TokenOperationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Token, perhaps with new signatures
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.Token token = 1;</code>
     */
    private $token = null;
    /**
     * Success/failure status
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenOperationResult.Status status = 2;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Token\Token $token
     *           Token, perhaps with new signatures
     *     @type int $status
     *           Success/failure status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * Token, perhaps with new signatures
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.Token token = 1;</code>
     * @return \Io\Token\Proto\Common\Token\Token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Token, perhaps with new signatures
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.Token token = 1;</code>
     * @param \Io\Token\Proto\Common\Token\Token $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\Token::class);
        $this->token = $var;

        return $this;
    }

    /**
     * Success/failure status
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenOperationResult.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Success/failure status
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenOperationResult.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Token\TokenOperationResult_Status::class);
        $this->status = $var;

        return $this;
    }

}

