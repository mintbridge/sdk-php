<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetAccountsResponse</code>
 */
class GetAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * basic account information
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.account.Account accounts = 1;</code>
     */
    private $accounts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Account\Account[]|\Google\Protobuf\Internal\RepeatedField $accounts
     *           basic account information
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * basic account information
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.account.Account accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * basic account information
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.account.Account accounts = 1;</code>
     * @param \Io\Token\Proto\Common\Account\Account[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Account\Account::class);
        $this->accounts = $arr;

        return $this;
    }

}

