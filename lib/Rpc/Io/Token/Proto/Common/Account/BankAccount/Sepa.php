<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Io\Token\Proto\Common\Account\BankAccount;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SEPA transfer.
 *
 * Generated from protobuf message <code>io.token.proto.common.account.BankAccount.Sepa</code>
 */
class Sepa extends \Google\Protobuf\Internal\Message
{
    /**
     * International Bank Account Number
     *
     * Generated from protobuf field <code>string iban = 1;</code>
     */
    private $iban = '';
    /**
     * Bic code. Optional, except for non EEA countries
     *
     * Generated from protobuf field <code>string bic = 2;</code>
     */
    private $bic = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iban
     *           International Bank Account Number
     *     @type string $bic
     *           Bic code. Optional, except for non EEA countries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     * International Bank Account Number
     *
     * Generated from protobuf field <code>string iban = 1;</code>
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * International Bank Account Number
     *
     * Generated from protobuf field <code>string iban = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIban($var)
    {
        GPBUtil::checkString($var, True);
        $this->iban = $var;

        return $this;
    }

    /**
     * Bic code. Optional, except for non EEA countries
     *
     * Generated from protobuf field <code>string bic = 2;</code>
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Bic code. Optional, except for non EEA countries
     *
     * Generated from protobuf field <code>string bic = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBic($var)
    {
        GPBUtil::checkString($var, True);
        $this->bic = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Sepa::class, \Io\Token\Proto\Common\Account\BankAccount_Sepa::class);
