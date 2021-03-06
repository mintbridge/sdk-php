<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace Io\Token\Proto\Common\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.token.TokenPayload</code>
 */
class TokenPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * 1.0
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    private $version = '';
    /**
     * random string used to de-dupe tokens, set by client.
     *
     * Generated from protobuf field <code>string ref_id = 2;</code>
     */
    private $ref_id = '';
    /**
     * Token issuer, bank.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember issuer = 3;</code>
     */
    private $issuer = null;
    /**
     * Payer member.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember from = 4;</code>
     */
    private $from = null;
    /**
     * Payee member.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember to = 5;</code>
     */
    private $to = null;
    /**
     * Optional
     *
     * Generated from protobuf field <code>int64 effective_at_ms = 6;</code>
     */
    private $effective_at_ms = 0;
    /**
     * Expiration time. Access tokens ignore this; all access tokens
     * have a 90-day lifespan. For transfer tokens, this is an optional
     * expiration time.
     *
     * Generated from protobuf field <code>int64 expires_at_ms = 7;</code>
     */
    private $expires_at_ms = 0;
    /**
     * Optional, can be endorsed until this time
     *
     * Generated from protobuf field <code>int64 endorse_until_ms = 11;</code>
     */
    private $endorse_until_ms = 0;
    /**
     * Optional
     *
     * Generated from protobuf field <code>string description = 8 [(.io.token.proto.extensions.field.redact) = true];</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenPayload.ActingAs acting_as = 12;</code>
     */
    private $acting_as = null;
    /**
     * Generated from protobuf field <code>bool receipt_requested = 13;</code>
     */
    private $receipt_requested = false;
    protected $body;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           1.0
     *     @type string $ref_id
     *           random string used to de-dupe tokens, set by client.
     *     @type \Io\Token\Proto\Common\Token\TokenMember $issuer
     *           Token issuer, bank.
     *     @type \Io\Token\Proto\Common\Token\TokenMember $from
     *           Payer member.
     *     @type \Io\Token\Proto\Common\Token\TokenMember $to
     *           Payee member.
     *     @type int|string $effective_at_ms
     *           Optional
     *     @type int|string $expires_at_ms
     *           Expiration time. Access tokens ignore this; all access tokens
     *           have a 90-day lifespan. For transfer tokens, this is an optional
     *           expiration time.
     *     @type int|string $endorse_until_ms
     *           Optional, can be endorsed until this time
     *     @type string $description
     *           Optional
     *     @type \Io\Token\Proto\Common\Token\TransferBody $transfer
     *     @type \Io\Token\Proto\Common\Token\AccessBody $access
     *     @type \Io\Token\Proto\Common\Token\TokenPayload\ActingAs $acting_as
     *     @type bool $receipt_requested
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * 1.0
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * 1.0
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * random string used to de-dupe tokens, set by client.
     *
     * Generated from protobuf field <code>string ref_id = 2;</code>
     * @return string
     */
    public function getRefId()
    {
        return $this->ref_id;
    }

    /**
     * random string used to de-dupe tokens, set by client.
     *
     * Generated from protobuf field <code>string ref_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRefId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ref_id = $var;

        return $this;
    }

    /**
     * Token issuer, bank.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember issuer = 3;</code>
     * @return \Io\Token\Proto\Common\Token\TokenMember
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Token issuer, bank.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember issuer = 3;</code>
     * @param \Io\Token\Proto\Common\Token\TokenMember $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenMember::class);
        $this->issuer = $var;

        return $this;
    }

    /**
     * Payer member.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember from = 4;</code>
     * @return \Io\Token\Proto\Common\Token\TokenMember
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Payer member.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember from = 4;</code>
     * @param \Io\Token\Proto\Common\Token\TokenMember $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenMember::class);
        $this->from = $var;

        return $this;
    }

    /**
     * Payee member.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember to = 5;</code>
     * @return \Io\Token\Proto\Common\Token\TokenMember
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Payee member.
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember to = 5;</code>
     * @param \Io\Token\Proto\Common\Token\TokenMember $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenMember::class);
        $this->to = $var;

        return $this;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>int64 effective_at_ms = 6;</code>
     * @return int|string
     */
    public function getEffectiveAtMs()
    {
        return $this->effective_at_ms;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>int64 effective_at_ms = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEffectiveAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->effective_at_ms = $var;

        return $this;
    }

    /**
     * Expiration time. Access tokens ignore this; all access tokens
     * have a 90-day lifespan. For transfer tokens, this is an optional
     * expiration time.
     *
     * Generated from protobuf field <code>int64 expires_at_ms = 7;</code>
     * @return int|string
     */
    public function getExpiresAtMs()
    {
        return $this->expires_at_ms;
    }

    /**
     * Expiration time. Access tokens ignore this; all access tokens
     * have a 90-day lifespan. For transfer tokens, this is an optional
     * expiration time.
     *
     * Generated from protobuf field <code>int64 expires_at_ms = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiresAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->expires_at_ms = $var;

        return $this;
    }

    /**
     * Optional, can be endorsed until this time
     *
     * Generated from protobuf field <code>int64 endorse_until_ms = 11;</code>
     * @return int|string
     */
    public function getEndorseUntilMs()
    {
        return $this->endorse_until_ms;
    }

    /**
     * Optional, can be endorsed until this time
     *
     * Generated from protobuf field <code>int64 endorse_until_ms = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndorseUntilMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->endorse_until_ms = $var;

        return $this;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>string description = 8 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>string description = 8 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TransferBody transfer = 9;</code>
     * @return \Io\Token\Proto\Common\Token\TransferBody
     */
    public function getTransfer()
    {
        return $this->readOneof(9);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TransferBody transfer = 9;</code>
     * @param \Io\Token\Proto\Common\Token\TransferBody $var
     * @return $this
     */
    public function setTransfer($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TransferBody::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.AccessBody access = 10;</code>
     * @return \Io\Token\Proto\Common\Token\AccessBody
     */
    public function getAccess()
    {
        return $this->readOneof(10);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.AccessBody access = 10;</code>
     * @param \Io\Token\Proto\Common\Token\AccessBody $var
     * @return $this
     */
    public function setAccess($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\AccessBody::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenPayload.ActingAs acting_as = 12;</code>
     * @return \Io\Token\Proto\Common\Token\TokenPayload\ActingAs
     */
    public function getActingAs()
    {
        return $this->acting_as;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenPayload.ActingAs acting_as = 12;</code>
     * @param \Io\Token\Proto\Common\Token\TokenPayload\ActingAs $var
     * @return $this
     */
    public function setActingAs($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenPayload_ActingAs::class);
        $this->acting_as = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool receipt_requested = 13;</code>
     * @return bool
     */
    public function getReceiptRequested()
    {
        return $this->receipt_requested;
    }

    /**
     * Generated from protobuf field <code>bool receipt_requested = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setReceiptRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->receipt_requested = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->whichOneof("body");
    }

}

