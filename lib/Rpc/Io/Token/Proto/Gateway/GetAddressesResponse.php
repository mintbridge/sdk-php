<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetAddressesResponse</code>
 */
class GetAddressesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * list of addresses
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.member.AddressRecord addresses = 1;</code>
     */
    private $addresses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Member\AddressRecord[]|\Google\Protobuf\Internal\RepeatedField $addresses
     *           list of addresses
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * list of addresses
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.member.AddressRecord addresses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * list of addresses
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.member.AddressRecord addresses = 1;</code>
     * @param \Io\Token\Proto\Common\Member\AddressRecord[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Member\AddressRecord::class);
        $this->addresses = $arr;

        return $this;
    }

}

