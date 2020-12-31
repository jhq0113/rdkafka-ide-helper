<?php
namespace RdKafka;

/**
 * This is the base class for low-level clients: RdKafka\Consumer, RdKafka\Producer. This class can not be instanciated directly, use one of the sub classes instead.
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka.html
 * @package RdKafka
 * @datetime 2020/12/31 3:02 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class RdKafka
{
    /**
     * RdKafka constructor.
     * @param Conf|null $conf
     */
    public function __construct(Conf $conf = null)
    {
    }

    /**
     * Add brokers
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.setlogger.html
     * @param string $broker_list
     * @example
     * $kafka->addBrokers("broker1:10000,broker2");
     * $kafka->addBrokers("SSL://broker3:9000,ssl://broker2");
     *
     * @return integer
     * @datetime 2020/12/31 2:56 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function addBrokers ($broker_list )
    {

    }

    /**
     * Create a new topic instance
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.newtopic.html
     * @param string $topic_name
     * @param TopicConf|null $topic_conf
     * @return Topic
     * @datetime 2020/12/31 5:27 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function newTopic($topic_name, TopicConf $topic_conf = null)
    {

    }

    /**
     * Get the out queue length
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.getoutqlen.html
     * @return integer
     * @datetime 2020/12/31 2:57 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getOutQLen()
    {

    }

    /**
     * Poll for events
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.poll.html
     * @param integer $timeout_ms
     * @return void
     * @datetime 2020/12/31 2:58 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function poll($timeout_ms)
    {

    }

    /**
     * Wait until all outstanding produce requests, et.al, are completed.
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.flush.html
     * @param integer $timeout_ms
     * @return integer
     * @datetime 2020/12/31 2:59 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function flush($timeout_ms)
    {

    }

    /**
     * Purge messages handled by the producer
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.purge.html
     * @param integer $purge_flags
     * @return integer
     * @datetime 2020/12/31 2:59 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function purge($purge_flags )
    {

    }

    /**
     * @deprecated
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.setloglevel.html
     * @param integer $level
     * @datetime 2020/12/31 3:03 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setLogLevel ($level )
    {

    }

    /**
     * @deprecated
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.setlogger.html
     * @param integer $logger_id
     * @datetime 2020/12/31 3:03 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setLogger($logger_id )
    {

    }

    /**
     * Query offsets for a topic / partition
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.querywatermakoffsets.html
     * @param string  $topic
     * @param integer $partition
     * @param integer $low
     * @param integer $high
     * @param integer $timeout_ms
     * @datetime 2020/12/31 3:01 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function queryWatermarkOffsets ($topic , $partition , &$low , &$high , $timeout_ms )
    {

    }

    /**
     * Get offsets for timestamps
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.offsetsfortimes.html
     * @param array   $topicPartitions
     * @param integer $timeout_ms
     * @return array
     * @datetime 2020/12/31 3:02 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function offsetsForTimes ($topicPartitions , $timeout_ms )
    {

    }
}