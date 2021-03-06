<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Io\Token\Proto\Common\Transaction\Balance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.transaction.Balance.TypedBalance</code>
 */
class TypedBalance extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.money.Money amount = 2;</code>
     */
    private $amount = null;
    /**
     * Generated from protobuf field <code>int64 updated_at_ms = 3;</code>
     */
    private $updated_at_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type \Io\Token\Proto\Common\Money\Money $amount
     *     @type int|string $updated_at_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.money.Money amount = 2;</code>
     * @return \Io\Token\Proto\Common\Money\Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.money.Money amount = 2;</code>
     * @param \Io\Token\Proto\Common\Money\Money $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Money\Money::class);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 updated_at_ms = 3;</code>
     * @return int|string
     */
    public function getUpdatedAtMs()
    {
        return $this->updated_at_ms;
    }

    /**
     * Generated from protobuf field <code>int64 updated_at_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdatedAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->updated_at_ms = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TypedBalance::class, \Io\Token\Proto\Common\Transaction\Balance_TypedBalance::class);

