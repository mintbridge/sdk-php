<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: subscriber.proto

namespace Io\Token\Proto\Common\Subscriber;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Subscriber object. Represent a subscription to notifications for a member.
 *
 * Generated from protobuf message <code>io.token.proto.common.subscriber.Subscriber</code>
 */
class Subscriber extends \Google\Protobuf\Internal\Message
{
    /**
     * Subscription ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Determines who is handling/sending the notification (e.g. token)
     *
     * Generated from protobuf field <code>string handler = 2;</code>
     */
    private $handler = '';
    /**
     * contains information on how to send the notifications
     *
     * Generated from protobuf field <code>map<string, string> handler_instructions = 3;</code>
     */
    private $handler_instructions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Subscription ID
     *     @type string $handler
     *           Determines who is handling/sending the notification (e.g. token)
     *     @type array|\Google\Protobuf\Internal\MapField $handler_instructions
     *           contains information on how to send the notifications
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Subscriber::initOnce();
        parent::__construct($data);
    }

    /**
     * Subscription ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Subscription ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Determines who is handling/sending the notification (e.g. token)
     *
     * Generated from protobuf field <code>string handler = 2;</code>
     * @return string
     */
    public function getHandler()
    {
        return $this->handler;
    }

    /**
     * Determines who is handling/sending the notification (e.g. token)
     *
     * Generated from protobuf field <code>string handler = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHandler($var)
    {
        GPBUtil::checkString($var, True);
        $this->handler = $var;

        return $this;
    }

    /**
     * contains information on how to send the notifications
     *
     * Generated from protobuf field <code>map<string, string> handler_instructions = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHandlerInstructions()
    {
        return $this->handler_instructions;
    }

    /**
     * contains information on how to send the notifications
     *
     * Generated from protobuf field <code>map<string, string> handler_instructions = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHandlerInstructions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->handler_instructions = $arr;

        return $this;
    }

}

