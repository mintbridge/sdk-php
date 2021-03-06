<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: notification.proto

namespace Io\Token\Proto\Common\Notification;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The record of a notification. Retrieved from notification service
 *
 * Generated from protobuf message <code>io.token.proto.common.notification.Notification</code>
 */
class Notification extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique ID given to this notification
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * The subscriber that was or will be notified
     *
     * Generated from protobuf field <code>string subscriber_id = 2;</code>
     */
    private $subscriber_id = '';
    /**
     * Contents of the notification
     *
     * Generated from protobuf field <code>.io.token.proto.common.notification.NotificationContent content = 3;</code>
     */
    private $content = null;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.notification.Notification.Status status = 4;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique ID given to this notification
     *     @type string $subscriber_id
     *           The subscriber that was or will be notified
     *     @type \Io\Token\Proto\Common\Notification\NotificationContent $content
     *           Contents of the notification
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Notification::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique ID given to this notification
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique ID given to this notification
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
     * The subscriber that was or will be notified
     *
     * Generated from protobuf field <code>string subscriber_id = 2;</code>
     * @return string
     */
    public function getSubscriberId()
    {
        return $this->subscriber_id;
    }

    /**
     * The subscriber that was or will be notified
     *
     * Generated from protobuf field <code>string subscriber_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscriberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscriber_id = $var;

        return $this;
    }

    /**
     * Contents of the notification
     *
     * Generated from protobuf field <code>.io.token.proto.common.notification.NotificationContent content = 3;</code>
     * @return \Io\Token\Proto\Common\Notification\NotificationContent
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Contents of the notification
     *
     * Generated from protobuf field <code>.io.token.proto.common.notification.NotificationContent content = 3;</code>
     * @param \Io\Token\Proto\Common\Notification\NotificationContent $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Notification\NotificationContent::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.notification.Notification.Status status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.notification.Notification.Status status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Notification\Notification_Status::class);
        $this->status = $var;

        return $this;
    }

}

