<?php
namespace RdKafka;

/**
 * This object represents either a single consumed or produced message, or an event ($err is set).
 *
 * An application must check RdKafka\Message::err to see if the object is a proper message (error is RD_KAFKA_RESP_ERR_NO_ERROR) or an error event.
 * @package RdKafka
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/class.rdkafka-message.html
 * @datetime 2020/12/31 3:36 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Message
{
    /**
     * @var integer
     */
    public $err;

    /**
     * @var integer
     */
    public $len;

    /**
     * @var string
     */
    public $topic_name;

    /**
     * @var integer
     */
    public $partition;

    /**
     * @var integer
     */
    public $timestamp;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $key;

    /**
     * @var integer
     */
    public $offset;

    /**
     * @var string
     */
    public $opaque;

    /**
     * Get the error as string
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-message.errstr.html
     * @return string
     * @datetime 2020/12/31 3:35 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function errstr()
    {

    }

    /**
     * Get the message headers
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-message.headers.html
     * @return string
     * @datetime 2020/12/31 3:35 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function headers()
    {

    }
}