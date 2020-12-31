<?php
namespace RdKafka;

/**
 * Topic+Partition
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka-topicpartition.html
 * @package RdKafka
 * @datetime 2020/12/31 3:50 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class TopicPartition
{
    /**
     * TopicPartition constructor.
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.construct.html
     * @param string $topic
     * @param int $partition
     * @param int|null $offset
     */
    public function __construct($topic, $partition, $offset = null)
    {

    }

    /**
     * Get the offset
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.getoffset.html
     * @return integer
     * @datetime 2020/12/31 3:52 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getOffset()
    {

    }

    /**
     * Get the partition ID
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.getpartition.html
     * @return integer
     * @datetime 2020/12/31 3:52 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getPartition()
    {

    }

    /**
     * Get the topic name
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.gettopic.html
     * @return string
     * @datetime 2020/12/31 3:53 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getTopic()
    {

    }

    /**
     * Set the offset
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.setoffset.html
     * @return string
     * @datetime 2020/12/31 3:54 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setOffset()
    {

    }

    /**
     * Set the partition ID
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.setpartition.html
     * @param string $partition
     * @datetime 2020/12/31 3:55 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setPartition($partition)
    {

    }

    /**
     * Set the topic name
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.settopic.html
     * @param string $topic_name
     * @datetime 2020/12/31 3:56 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setTopic($topic_name)
    {

    }
}