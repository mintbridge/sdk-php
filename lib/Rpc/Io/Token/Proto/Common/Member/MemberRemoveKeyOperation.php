<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: member.proto

namespace Io\Token\Proto\Common\Member;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Removes member key from the directory.
 *
 * Generated from protobuf message <code>io.token.proto.common.member.MemberRemoveKeyOperation</code>
 */
class MemberRemoveKeyOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of key to remove
     *
     * Generated from protobuf field <code>string key_id = 1;</code>
     */
    private $key_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_id
     *           ID of key to remove
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of key to remove
     *
     * Generated from protobuf field <code>string key_id = 1;</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * ID of key to remove
     *
     * Generated from protobuf field <code>string key_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

}

