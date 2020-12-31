<?php
namespace RdKafka;

/**
 * This class represents a topic when using RdKafka\Producer. It can not be instantiated directly, RdKafka\Producer::newTopic() should be used instead.
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka-producertopic.html
 * @package RdKafka
 * @datetime 2020/12/31 3:39 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
abstract class ProducerTopic extends Topic
{
    /**
     * Produce and send a single message
     * @example
     * $message = [
     *  'type' => 'account-created',
     *  'id' => $accountId,
     *  'date' => date(DATE_W3C),
     * ];
     *
     * $payload = json_encode($message);
     *
     * $topic->produce(RD_KAFKA_PARTITION_UA, 0, $payload, $accountId);
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-producertopic.produce.html
     * @param integer $partition
     * @param integer $msgflags
     * @param string $payload
     * @param string|null $key
     * @datetime 2020/12/31 3:39 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function produce($partition, $msgflags, $payload, $key = null)
    {

    }

    /**
     * Produce and send a single message with headers
     * @example
     * $message = [
     * 'type' => 'account-created',
     *   'id' => $accountId,
     *   'date' => date(DATE_W3C),
     * ];
     *
     * $headers = [
     *   'SomeKey' => 'SomeValue',
     *   'AnotherKey' => 'AnotherValue',
     * ];
     *
     * $payload = json_encode($message);
     *
     * $topic->producev(RD_KAFKA_PARTITION_UA, 0, $payload, $accountId, $headers);
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-producertopic.produce.html
     * @param integer $partition
     * @param integer $msgflags
     * @param string $payload
     * @param string $key
     * @param array $headers
     * @datetime 2020/12/31 3:40 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function producev($partition, $msgflags, $payload, $key, $headers)
    {

    }
}