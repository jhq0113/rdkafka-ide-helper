<?php
namespace RdKafka;

/**
 * This is the low-level Kafka consumer. It can be used with Kafka >= 0.8
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka-consumer.html
 * @package RdKafka
 * @datetime 2020/12/31 3:03 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Consumer extends RdKafka
{
    /**
     * Create a new topic instance
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.newtopic.html
     * @param string $topic_name
     * @param TopicConf|null $topic_conf
     * @return ConsumerTopic
     * @datetime 2020/12/31 5:27 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function newTopic($topic_name, TopicConf $topic_conf = null)
    {

    }

    /**
     * Create a new message queue instance
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-consumer.newqueue.html
     * @return \RdKafka\Queue
     * @datetime 2020/12/31 3:30 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function newQueue()
    {

    }
}