<?php
/**
 * Class Message
 * @author Nixus
 */
class Message
{
    public function __construct()
    {
        if (Callback::checkSignature()) {
            return '消息非法';
        } else {
            return '消息已接收！';
        }
    }
}

