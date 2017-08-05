<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * Class ReplyKeyboardRemove
 * Upon receiving a message with this object, Telegram clients will hide the current custom keyboard
 * and display the default letter-keyboard. By default, custom keyboards are displayed
 * until a new keyboard is sent by a bot. An exception is made for one-time keyboards
 * that are hidden immediately after the user presses a button (see \TelegramBot\Api\Types\ReplyKeyboardMarkup).
 *
 * @package TelegramBot\Api\Types
 */
class ReplyKeyboardRemove extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['remove_keyboard'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'remove_keyboard' => true,
        'selective' => true
    ];

    /**
     * Requests clients to hide the custom keyboard
     *
     * @var bool
     */
    protected $removeKeyboard;

    /**
     * Optional. Use this parameter if you want to show the keyboard to specific users only.
     * Targets:
     * 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     *
     * @var bool
     */
    protected $selective;

    public function __construct($removeKeyboard = true, $selective = null)
    {
        $this->removeKeyboard = $removeKeyboard;
        $this->selective = $selective;
    }

    /**
     * @return boolean
     */
    public function isRemoveKeyboard()
    {
        return $this->removeKeyboard;
    }

    /**
     * @param boolean $removeKeyboard
     */
    public function setRemoveKeyboard($removeKeyboard)
    {
        $this->removeKeyboard = $removeKeyboard;
    }

    /**
     * @return boolean
     */
    public function isSelective()
    {
        return $this->selective;
    }

    /**
     * @param boolean $selective
     */
    public function setSelective($selective)
    {
        $this->selective = $selective;
    }
}
