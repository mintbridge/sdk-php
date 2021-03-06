<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: banklink.proto

namespace Io\Token\Proto\Banklink;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////////////////////////
 * This message represents a Token member's authority over a bank account.
 * Since they're sent over the network, normally the bank encrypts them.
 * How a member uses it: https://developer.token.io/sdk/#link-a-bank-account
 * How a bank creates it: https://developer.token.io/bank-integration/#bank-account-linking
 * Here, a SealedMessage "seals" a PlaintextBankAuthorization message.
 *
 * Generated from protobuf message <code>io.token.proto.banklink.BankAuthorization</code>
 */
class BankAuthorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Bank ID, e.g., "iron"
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     */
    private $bank_id = '';
    /**
     * Encrypted link info
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.security.SealedMessage accounts = 2;</code>
     */
    private $accounts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bank_id
     *           Bank ID, e.g., "iron"
     *     @type \Io\Token\Proto\Common\Security\SealedMessage[]|\Google\Protobuf\Internal\RepeatedField $accounts
     *           Encrypted link info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Banklink::initOnce();
        parent::__construct($data);
    }

    /**
     * Bank ID, e.g., "iron"
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @return string
     */
    public function getBankId()
    {
        return $this->bank_id;
    }

    /**
     * Bank ID, e.g., "iron"
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBankId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_id = $var;

        return $this;
    }

    /**
     * Encrypted link info
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.security.SealedMessage accounts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * Encrypted link info
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.security.SealedMessage accounts = 2;</code>
     * @param \Io\Token\Proto\Common\Security\SealedMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Security\SealedMessage::class);
        $this->accounts = $arr;

        return $this;
    }

}

