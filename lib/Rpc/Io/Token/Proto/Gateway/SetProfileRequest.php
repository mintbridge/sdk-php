<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.SetProfileRequest</code>
 */
class SetProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * new profile, picture fields ignored
     *
     * Generated from protobuf field <code>.io.token.proto.common.member.Profile profile = 1;</code>
     */
    private $profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Member\Profile $profile
     *           new profile, picture fields ignored
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * new profile, picture fields ignored
     *
     * Generated from protobuf field <code>.io.token.proto.common.member.Profile profile = 1;</code>
     * @return \Io\Token\Proto\Common\Member\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * new profile, picture fields ignored
     *
     * Generated from protobuf field <code>.io.token.proto.common.member.Profile profile = 1;</code>
     * @param \Io\Token\Proto\Common\Member\Profile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Member\Profile::class);
        $this->profile = $var;

        return $this;
    }

}

