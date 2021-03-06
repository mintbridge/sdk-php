<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transferinstructions.proto

namespace Io\Token\Proto\Common\Transferinstructions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.transferinstructions.CustomerData</code>
 */
class CustomerData extends \Google\Protobuf\Internal\Message
{
    /**
     * Repeated in case of joint account holders.
     *
     * Generated from protobuf field <code>repeated string legal_names = 1;</code>
     */
    private $legal_names;
    /**
     * Physical address
     *
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     */
    private $address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $legal_names
     *           Repeated in case of joint account holders.
     *     @type \Io\Token\Proto\Common\Address\Address $address
     *           Physical address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transferinstructions::initOnce();
        parent::__construct($data);
    }

    /**
     * Repeated in case of joint account holders.
     *
     * Generated from protobuf field <code>repeated string legal_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLegalNames()
    {
        return $this->legal_names;
    }

    /**
     * Repeated in case of joint account holders.
     *
     * Generated from protobuf field <code>repeated string legal_names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLegalNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->legal_names = $arr;

        return $this;
    }

    /**
     * Physical address
     *
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     * @return \Io\Token\Proto\Common\Address\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Physical address
     *
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     * @param \Io\Token\Proto\Common\Address\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Address\Address::class);
        $this->address = $var;

        return $this;
    }

}

