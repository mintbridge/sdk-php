<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace Io\Token\Proto\Common\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.token.TransferBody</code>
 */
class TransferBody extends \Google\Protobuf\Internal\Message
{
    /**
     * Redeemer member (deprecated: use TokenPayload.to instead).
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember redeemer = 1 [deprecated = true];</code>
     */
    private $redeemer = null;
    /**
     * Transfer instructions.
     *
     * Generated from protobuf field <code>.io.token.proto.common.transferinstructions.TransferInstructions instructions = 2;</code>
     */
    private $instructions = null;
    /**
     * Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 4;</code>
     */
    private $currency = '';
    /**
     * Optional: Token total lifetime amount. Double.
     *
     * Generated from protobuf field <code>string lifetime_amount = 5;</code>
     */
    private $lifetime_amount = '';
    /**
     * Optional: Single token charge request acceptable range. Double.
     *
     * Generated from protobuf field <code>string amount = 6;</code>
     */
    private $amount = '';
    /**
     * Optional: file / data attachments
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.blob.Attachment attachments = 8;</code>
     */
    private $attachments;
    /**
     * Optional: Transfer fees and fx charges.
     *
     * Generated from protobuf field <code>.io.token.proto.common.pricing.Pricing pricing = 9;</code>
     */
    private $pricing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Token\TokenMember $redeemer
     *           Redeemer member (deprecated: use TokenPayload.to instead).
     *     @type \Io\Token\Proto\Common\Transferinstructions\TransferInstructions $instructions
     *           Transfer instructions.
     *     @type string $currency
     *           Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *     @type string $lifetime_amount
     *           Optional: Token total lifetime amount. Double.
     *     @type string $amount
     *           Optional: Single token charge request acceptable range. Double.
     *     @type \Io\Token\Proto\Common\Blob\Attachment[]|\Google\Protobuf\Internal\RepeatedField $attachments
     *           Optional: file / data attachments
     *     @type \Io\Token\Proto\Common\Pricing\Pricing $pricing
     *           Optional: Transfer fees and fx charges.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * Redeemer member (deprecated: use TokenPayload.to instead).
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember redeemer = 1 [deprecated = true];</code>
     * @return \Io\Token\Proto\Common\Token\TokenMember
     */
    public function getRedeemer()
    {
        return $this->redeemer;
    }

    /**
     * Redeemer member (deprecated: use TokenPayload.to instead).
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember redeemer = 1 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Token\TokenMember $var
     * @return $this
     */
    public function setRedeemer($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenMember::class);
        $this->redeemer = $var;

        return $this;
    }

    /**
     * Transfer instructions.
     *
     * Generated from protobuf field <code>.io.token.proto.common.transferinstructions.TransferInstructions instructions = 2;</code>
     * @return \Io\Token\Proto\Common\Transferinstructions\TransferInstructions
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Transfer instructions.
     *
     * Generated from protobuf field <code>.io.token.proto.common.transferinstructions.TransferInstructions instructions = 2;</code>
     * @param \Io\Token\Proto\Common\Transferinstructions\TransferInstructions $var
     * @return $this
     */
    public function setInstructions($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Transferinstructions\TransferInstructions::class);
        $this->instructions = $var;

        return $this;
    }

    /**
     * Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 4;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 4;</code>
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
     * Optional: Token total lifetime amount. Double.
     *
     * Generated from protobuf field <code>string lifetime_amount = 5;</code>
     * @return string
     */
    public function getLifetimeAmount()
    {
        return $this->lifetime_amount;
    }

    /**
     * Optional: Token total lifetime amount. Double.
     *
     * Generated from protobuf field <code>string lifetime_amount = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLifetimeAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->lifetime_amount = $var;

        return $this;
    }

    /**
     * Optional: Single token charge request acceptable range. Double.
     *
     * Generated from protobuf field <code>string amount = 6;</code>
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Optional: Single token charge request acceptable range. Double.
     *
     * Generated from protobuf field <code>string amount = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->amount = $var;

        return $this;
    }

    /**
     * Optional: file / data attachments
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.blob.Attachment attachments = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Optional: file / data attachments
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.blob.Attachment attachments = 8;</code>
     * @param \Io\Token\Proto\Common\Blob\Attachment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttachments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Blob\Attachment::class);
        $this->attachments = $arr;

        return $this;
    }

    /**
     * Optional: Transfer fees and fx charges.
     *
     * Generated from protobuf field <code>.io.token.proto.common.pricing.Pricing pricing = 9;</code>
     * @return \Io\Token\Proto\Common\Pricing\Pricing
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Optional: Transfer fees and fx charges.
     *
     * Generated from protobuf field <code>.io.token.proto.common.pricing.Pricing pricing = 9;</code>
     * @param \Io\Token\Proto\Common\Pricing\Pricing $var
     * @return $this
     */
    public function setPricing($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Pricing\Pricing::class);
        $this->pricing = $var;

        return $this;
    }

}
