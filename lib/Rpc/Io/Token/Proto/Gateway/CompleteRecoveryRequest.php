<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.CompleteRecoveryRequest</code>
 */
class CompleteRecoveryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * verification id
     *
     * Generated from protobuf field <code>string verification_id = 1;</code>
     */
    private $verification_id = '';
    /**
     * verification code (perhaps sent to alias email)
     *
     * Generated from protobuf field <code>string code = 2;</code>
     */
    private $code = '';
    /**
     * new privileged key to use
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key key = 3;</code>
     */
    private $key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $verification_id
     *           verification id
     *     @type string $code
     *           verification code (perhaps sent to alias email)
     *     @type \Io\Token\Proto\Common\Security\Key $key
     *           new privileged key to use
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * verification id
     *
     * Generated from protobuf field <code>string verification_id = 1;</code>
     * @return string
     */
    public function getVerificationId()
    {
        return $this->verification_id;
    }

    /**
     * verification id
     *
     * Generated from protobuf field <code>string verification_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVerificationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->verification_id = $var;

        return $this;
    }

    /**
     * verification code (perhaps sent to alias email)
     *
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * verification code (perhaps sent to alias email)
     *
     * Generated from protobuf field <code>string code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * new privileged key to use
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key key = 3;</code>
     * @return \Io\Token\Proto\Common\Security\Key
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * new privileged key to use
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key key = 3;</code>
     * @param \Io\Token\Proto\Common\Security\Key $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Security\Key::class);
        $this->key = $var;

        return $this;
    }

}

