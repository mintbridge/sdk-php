<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: money.proto

namespace Io\Token\Proto\Common\Money;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.money.Money</code>
 */
class Money extends \Google\Protobuf\Internal\Message
{
    /**
     * ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 1;</code>
     */
    private $currency = '';
    /**
     * double amount in the string format.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $currency
     *           ISO4217, 3 letter currency code such as "USD" or "EUR".
     *     @type string $value
     *           double amount in the string format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Money::initOnce();
        parent::__construct($data);
    }

    /**
     * ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 1;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     * double amount in the string format.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * double amount in the string format.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

