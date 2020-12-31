<?php
namespace RdKafka;

/**
 * This class represents a topic when using the RdKafka\KafkaConsumer. It can not be instantiated directly, RdKafka\KafkaConsumer::newTopic() should be used instead
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/class.rdkafka-kafkaconsumertopic.html
 * @package RdKafka
 * @datetime 2020/12/31 4:27 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
abstract class KafkaConsumerTopic extends Topic
{
    /**
     * Store offset
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumertopic.offsetstore.html
     * @param integer $partition
     * @param integer $offset
     * @datetime 2020/12/31 4:27 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function offsetStore($partition, $offset)
    {

    }
}