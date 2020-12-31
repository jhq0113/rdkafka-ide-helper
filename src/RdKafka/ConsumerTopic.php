<?php
namespace RdKafka;

/**
 * This class represents a topic when using the RdKafka\KafkaConsumer. It can not be instantiated directly, RdKafka\KafkaConsumer::newTopic() should be used instead.
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka-kafkaconsumertopic.html
 * @package RdKafka
 * @datetime 2020/12/31 4:20 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class ConsumerTopic
{
    /**
     * Consume a single message from a partition
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consume.html
     * @param integer $partition
     * @param integer $timeout_ms
     * @datetime 2020/12/31 4:21 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function consume($partition, $timeout_ms)
    {

    }

    /**
     * Pipe a partition to a queue
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consumequeuestart.html
     * @param integer $partition
     * @param integer $offset
     * @param Queue $queue
     * @datetime 2020/12/31 4:22 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function consumeQueueStart($partition, $offset, Queue $queue)
    {

    }

    /**
     * Start consuming messages
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consumestart.html
     * @param integer $partition
     * @param integer $offset
     * @datetime 2020/12/31 4:23 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function consumeStart($partition, $offset)
    {

    }

    /**
     * Stop consuming messages from partition
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consumestop.html
     * @param integer $partition
     * @datetime 2020/12/31 4:24 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function consumeStop($partition)
    {

    }

    /**
     * Store offset
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.offsetstore.html
     * @param integer $partition
     * @param integer $offset
     * @datetime 2020/12/31 4:25 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function offsetStore($partition , $offset)
    {

    }
}